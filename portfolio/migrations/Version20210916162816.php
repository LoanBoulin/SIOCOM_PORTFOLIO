<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210916162816 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache_semaine DROP FOREIGN KEY FK_B11BB55F1993631B');
        $this->addSql('DROP INDEX IDX_B11BB55F1993631B ON tache_semaine');
        $this->addSql('ALTER TABLE tache_semaine CHANGE semaine_tache_id semaine_stage_id INT NOT NULL');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55FE928EFB1 FOREIGN KEY (semaine_stage_id) REFERENCES semaine_stage (id)');
        $this->addSql('CREATE INDEX IDX_B11BB55FE928EFB1 ON tache_semaine (semaine_stage_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tache_semaine DROP FOREIGN KEY FK_B11BB55FE928EFB1');
        $this->addSql('DROP INDEX IDX_B11BB55FE928EFB1 ON tache_semaine');
        $this->addSql('ALTER TABLE tache_semaine CHANGE semaine_stage_id semaine_tache_id INT NOT NULL');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55F1993631B FOREIGN KEY (semaine_tache_id) REFERENCES tache_semaine (id)');
        $this->addSql('CREATE INDEX IDX_B11BB55F1993631B ON tache_semaine (semaine_tache_id)');
    }
}
