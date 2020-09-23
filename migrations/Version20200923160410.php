<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200923160410 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client_moral (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, tel INT NOT NULL, email VARCHAR(255) NOT NULL, ninea VARCHAR(255) NOT NULL, registre_commerce VARCHAR(255) NOT NULL, raison_sociale VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client_physique (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, tel INT NOT NULL, adresse VARCHAR(255) NOT NULL, email VARCHAR(50) NOT NULL, cni VARCHAR(50) DEFAULT NULL, salaire NUMERIC(50, 2) DEFAULT NULL, profession VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE compte (id INT AUTO_INCREMENT NOT NULL, numero_compte INT NOT NULL, type_compte VARCHAR(255) NOT NULL, frais_ouverture NUMERIC(50, 2) NOT NULL, remuneration NUMERIC(50, 2) DEFAULT NULL, date_ouverture VARCHAR(255) NOT NULL, date_fermeture VARCHAR(255) NOT NULL, solde NUMERIC(50, 2) NOT NULL, id_client_physique INT DEFAULT NULL, id_client_moral INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE client_moral');
        $this->addSql('DROP TABLE client_physique');
        $this->addSql('DROP TABLE compte');
    }
}
