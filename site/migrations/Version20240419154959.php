<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240419154959 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horraire CHANGE lundi_s lundi_s DATETIME NOT NULL, CHANGE mardi_m mardi_m DATETIME NOT NULL, CHANGE mardi_s mardi_s DATETIME NOT NULL, CHANGE jeudi_m jeudi_m DATETIME NOT NULL, CHANGE jeudi_s jeudi_s DATETIME NOT NULL, CHANGE vendredi_m vendredi_m DATETIME NOT NULL, CHANGE vendredi_s vendredi_s DATETIME NOT NULL, CHANGE samedi_m samedi_m DATETIME NOT NULL, CHANGE samedi_s samedi_s DATETIME NOT NULL, CHANGE lundi_m lundi_m DATETIME NOT NULL, CHANGE mercredi_m mercredi_m DATETIME NOT NULL, CHANGE mercredi_s mercredi_s DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE horraire CHANGE lundi_m lundi_m VARCHAR(255) NOT NULL, CHANGE lundi_s lundi_s VARCHAR(255) NOT NULL, CHANGE mardi_m mardi_m VARCHAR(255) NOT NULL, CHANGE mardi_s mardi_s VARCHAR(255) NOT NULL, CHANGE mercredi_m mercredi_m VARCHAR(255) NOT NULL, CHANGE mercredi_s mercredi_s VARCHAR(255) NOT NULL, CHANGE jeudi_m jeudi_m VARCHAR(255) NOT NULL, CHANGE jeudi_s jeudi_s VARCHAR(255) NOT NULL, CHANGE vendredi_m vendredi_m VARCHAR(255) NOT NULL, CHANGE vendredi_s vendredi_s VARCHAR(255) NOT NULL, CHANGE samedi_m samedi_m VARCHAR(255) NOT NULL, CHANGE samedi_s samedi_s VARCHAR(255) NOT NULL');
    }
}
