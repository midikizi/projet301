<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230619100055 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE clients (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, profession VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, telephone INT NOT NULL, mots_de_passe VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE comptes (id INT AUTO_INCREMENT NOT NULL, clients_id INT NOT NULL, numero_compte VARCHAR(255) NOT NULL, solde INT NOT NULL, date_ouvert DATETIME NOT NULL, type_compte VARCHAR(255) NOT NULL, INDEX IDX_56735801AB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE depot (id INT AUTO_INCREMENT NOT NULL, comptes_id INT NOT NULL, clients_id INT NOT NULL, montant INT NOT NULL, date_depot DATETIME NOT NULL, INDEX IDX_47948BBCDCED588B (comptes_id), INDEX IDX_47948BBCAB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pret (id INT AUTO_INCREMENT NOT NULL, clients_id INT NOT NULL, somme INT NOT NULL, taux_interet DOUBLE PRECISION NOT NULL, INDEX IDX_52ECE979AB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE remboursements (id INT AUTO_INCREMENT NOT NULL, pret_id INT NOT NULL, clients_id INT NOT NULL, payement INT NOT NULL, UNIQUE INDEX UNIQ_2B7BF03B1B61704B (pret_id), INDEX IDX_2B7BF03BAB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE retraits (id INT AUTO_INCREMENT NOT NULL, comptes_id INT NOT NULL, montant INT NOT NULL, date_retrait DATETIME NOT NULL, INDEX IDX_7BB2A03DCED588B (comptes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tontines (id INT AUTO_INCREMENT NOT NULL, clients_id INT NOT NULL, date_debut DATETIME NOT NULL, date_cloture DATETIME NOT NULL, montant INT NOT NULL, INDEX IDX_DB8BB5EDAB014612 (clients_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comptes ADD CONSTRAINT FK_56735801AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE depot ADD CONSTRAINT FK_47948BBCDCED588B FOREIGN KEY (comptes_id) REFERENCES comptes (id)');
        $this->addSql('ALTER TABLE depot ADD CONSTRAINT FK_47948BBCAB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE pret ADD CONSTRAINT FK_52ECE979AB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE remboursements ADD CONSTRAINT FK_2B7BF03B1B61704B FOREIGN KEY (pret_id) REFERENCES pret (id)');
        $this->addSql('ALTER TABLE remboursements ADD CONSTRAINT FK_2B7BF03BAB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
        $this->addSql('ALTER TABLE retraits ADD CONSTRAINT FK_7BB2A03DCED588B FOREIGN KEY (comptes_id) REFERENCES comptes (id)');
        $this->addSql('ALTER TABLE tontines ADD CONSTRAINT FK_DB8BB5EDAB014612 FOREIGN KEY (clients_id) REFERENCES clients (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comptes DROP FOREIGN KEY FK_56735801AB014612');
        $this->addSql('ALTER TABLE depot DROP FOREIGN KEY FK_47948BBCDCED588B');
        $this->addSql('ALTER TABLE depot DROP FOREIGN KEY FK_47948BBCAB014612');
        $this->addSql('ALTER TABLE pret DROP FOREIGN KEY FK_52ECE979AB014612');
        $this->addSql('ALTER TABLE remboursements DROP FOREIGN KEY FK_2B7BF03B1B61704B');
        $this->addSql('ALTER TABLE remboursements DROP FOREIGN KEY FK_2B7BF03BAB014612');
        $this->addSql('ALTER TABLE retraits DROP FOREIGN KEY FK_7BB2A03DCED588B');
        $this->addSql('ALTER TABLE tontines DROP FOREIGN KEY FK_DB8BB5EDAB014612');
        $this->addSql('DROP TABLE clients');
        $this->addSql('DROP TABLE comptes');
        $this->addSql('DROP TABLE depot');
        $this->addSql('DROP TABLE pret');
        $this->addSql('DROP TABLE remboursements');
        $this->addSql('DROP TABLE retraits');
        $this->addSql('DROP TABLE tontines');
    }
}
