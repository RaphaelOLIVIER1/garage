<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240411181004 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX UNIQ_IDENTIFIER_YES ON users');
        $this->addSql('ALTER TABLE users ADD email VARCHAR(255) NOT NULL, ADD firstname VARCHAR(255) NOT NULL, ADD lastname VARCHAR(255) NOT NULL, DROP yes, DROP roles, DROP first_name, DROP last_name');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users ADD yes VARCHAR(180) NOT NULL, ADD roles JSON NOT NULL COMMENT \'(DC2Type:json)\', ADD first_name VARCHAR(255) NOT NULL, ADD last_name VARCHAR(255) NOT NULL, DROP email, DROP firstname, DROP lastname');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_YES ON users (yes)');
    }
}
