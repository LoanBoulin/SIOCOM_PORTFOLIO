<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210916141406 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tache_semaine (id INT AUTO_INCREMENT NOT NULL, domaine_tache_id INT NOT NULL, jour_id INT NOT NULL, semaine_stage_id INT NOT NULL, description VARCHAR(255) NOT NULL, duree INT DEFAULT NULL, INDEX IDX_B11BB55F6542D8E6 (domaine_tache_id), INDEX IDX_B11BB55F220C6AD0 (jour_id), INDEX IDX_B11BB55FE928EFB1 (semaine_stage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55F6542D8E6 FOREIGN KEY (domaine_tache_id) REFERENCES domaine_tache (id)');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55F220C6AD0 FOREIGN KEY (jour_id) REFERENCES jour (id)');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55FE928EFB1 FOREIGN KEY (semaine_stage_id) REFERENCES semaine_stage (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE tache_semaine');
    }
}
