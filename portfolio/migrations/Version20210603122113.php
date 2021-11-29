<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210603122113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE enseignant DROP mail, DROP statut');
        //$this->addSql('ALTER TABLE enseignant ADD CONSTRAINT FK_81A72FA1B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        //$this->addSql('CREATE INDEX IDX_81A72FA1B3E9C81 ON enseignant (niveau_id)');
        $this->addSql('ALTER TABLE etudiant DROP statut, DROP mail');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        //$this->addSql('ALTER TABLE enseignant DROP FOREIGN KEY FK_81A72FA1B3E9C81');
        //$this->addSql('DROP INDEX IDX_81A72FA1B3E9C81 ON enseignant');
        //$this->addSql('ALTER TABLE enseignant ADD mail VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD statut VARCHAR(3) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        //$this->addSql('ALTER TABLE etudiant ADD statut VARCHAR(1) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, ADD mail VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
