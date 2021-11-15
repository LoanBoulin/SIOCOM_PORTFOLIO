<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210909114252 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE stage (id INT AUTO_INCREMENT NOT NULL, etudiant_id INT NOT NULL, enseignant_id INT DEFAULT NULL, nom_entreprise VARCHAR(50) NOT NULL, siret VARCHAR(14) NOT NULL, code_naf VARCHAR(5) NOT NULL, num_rue VARCHAR(5) NOT NULL, copos VARCHAR(5) NOT NULL, ville VARCHAR(50) NOT NULL, nom_tuteur VARCHAR(50) NOT NULL, tel_tuteur VARCHAR(15) NOT NULL, mail_tuteur VARCHAR(50) NOT NULL, lieu VARCHAR(50) DEFAULT NULL, sujet VARCHAR(255) NOT NULL, service VARCHAR(50) DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, duree INT NOT NULL, hor_lun VARCHAR(20) NOT NULL, hor_mar VARCHAR(20) DEFAULT NULL, hor_mer VARCHAR(20) DEFAULT NULL, hor_jeu VARCHAR(20) DEFAULT NULL, hor_ven VARCHAR(20) DEFAULT NULL, hor_sam VARCHAR(20) DEFAULT NULL, INDEX IDX_C27C9369DDEAB1A3 (etudiant_id), INDEX IDX_C27C9369E455FCC0 (enseignant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE stage');
        $this->addSql('ALTER TABLE user CHANGE roles roles VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
