<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211117081132 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE activite (id INT AUTO_INCREMENT NOT NULL, bloc_id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(255) DEFAULT NULL, INDEX IDX_B87555155582E9C0 (bloc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE bloc (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cadre (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, enseignant_id INT DEFAULT NULL, rp_id INT NOT NULL, commentaire LONGTEXT NOT NULL, date_commentaire DATE NOT NULL, INDEX IDX_67F068BCE455FCC0 (enseignant_id), INDEX IDX_67F068BCB70FF80C (rp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, activite_id INT NOT NULL, code VARCHAR(10) NOT NULL, libelle VARCHAR(255) DEFAULT NULL, INDEX IDX_94D4687F9B0F88B1 (activite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE domaine_tache (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(90) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE enseignant (id INT AUTO_INCREMENT NOT NULL, matiere_id INT DEFAULT NULL, niveau_id INT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, INDEX IDX_81A72FA1F46CD258 (matiere_id), INDEX IDX_81A72FA1B3E9C81 (niveau_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE etudiant (id INT AUTO_INCREMENT NOT NULL, promotion_id INT DEFAULT NULL, niveau_id INT DEFAULT NULL, specialite_id INT DEFAULT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, date_naiss DATE DEFAULT NULL, mobile VARCHAR(18) DEFAULT NULL, sexe VARCHAR(1) DEFAULT NULL, num_rue VARCHAR(10) DEFAULT NULL, rue VARCHAR(150) DEFAULT NULL, copos VARCHAR(5) DEFAULT NULL, ville VARCHAR(75) DEFAULT NULL, chemin_photo VARCHAR(255) DEFAULT NULL, INDEX IDX_717E22E3139DF194 (promotion_id), INDEX IDX_717E22E3B3E9C81 (niveau_id), INDEX IDX_717E22E32195E0F0 (specialite_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe (id INT AUTO_INCREMENT NOT NULL, groupe_type_id INT DEFAULT NULL, libelle VARCHAR(30) NOT NULL, INDEX IDX_4B98C2132B6BDD (groupe_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe_user (groupe_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_257BA9FE7A45358C (groupe_id), INDEX IDX_257BA9FEA76ED395 (user_id), PRIMARY KEY(groupe_id, user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe_type (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(90) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE jour (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(3) NOT NULL, nom VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE libelle (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE localisation (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE matiere (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(5) DEFAULT NULL, libelle VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(4) NOT NULL, nom_long VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau_rp (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(30) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post (id INT AUTO_INCREMENT NOT NULL, type_id_id INT DEFAULT NULL, date_time_post DATETIME NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_5A8A6C8D714819A0 (type_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE post_groupe (post_id INT NOT NULL, groupe_id INT NOT NULL, INDEX IDX_349B68444B89032C (post_id), INDEX IDX_349B68447A45358C (groupe_id), PRIMARY KEY(post_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE production (id INT AUTO_INCREMENT NOT NULL, rp_id INT DEFAULT NULL, designation VARCHAR(255) DEFAULT NULL, url VARCHAR(255) DEFAULT NULL, INDEX IDX_D3EDB1E0B70FF80C (rp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_def (id INT AUTO_INCREMENT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, libelle VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_def_matiere (projet_def_id INT NOT NULL, matiere_id INT NOT NULL, INDEX IDX_C9795E2CD6911079 (projet_def_id), INDEX IDX_C9795E2CF46CD258 (matiere_id), PRIMARY KEY(projet_def_id, matiere_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_def_enseignant (projet_def_id INT NOT NULL, enseignant_id INT NOT NULL, INDEX IDX_2F3C3EC6D6911079 (projet_def_id), INDEX IDX_2F3C3EC6E455FCC0 (enseignant_id), PRIMARY KEY(projet_def_id, enseignant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_def_groupe (projet_def_id INT NOT NULL, groupe_id INT NOT NULL, INDEX IDX_DA8DFD5DD6911079 (projet_def_id), INDEX IDX_DA8DFD5D7A45358C (groupe_id), PRIMARY KEY(projet_def_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_equipe (id INT AUTO_INCREMENT NOT NULL, groupe_id INT DEFAULT NULL, libelle VARCHAR(90) NOT NULL, INDEX IDX_6E00A437A45358C (groupe_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_equipe_ressource (projet_equipe_id INT NOT NULL, ressource_id INT NOT NULL, INDEX IDX_DEA0C23F4E78FC5D (projet_equipe_id), INDEX IDX_DEA0C23FFC6CD52A (ressource_id), PRIMARY KEY(projet_equipe_id, ressource_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_type (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_type_projet_def (projet_type_id INT NOT NULL, projet_def_id INT NOT NULL, INDEX IDX_8BF1529E4766D1E2 (projet_type_id), INDEX IDX_8BF1529ED6911079 (projet_def_id), PRIMARY KEY(projet_type_id, projet_def_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, annee VARCHAR(9) NOT NULL, statut VARCHAR(3) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, lien LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource_post (ressource_id INT NOT NULL, post_id INT NOT NULL, INDEX IDX_AA356C04FC6CD52A (ressource_id), INDEX IDX_AA356C044B89032C (post_id), PRIMARY KEY(ressource_id, post_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rp (id INT AUTO_INCREMENT NOT NULL, localisation_id INT DEFAULT NULL, statut_id INT DEFAULT NULL, source_id INT NOT NULL, cadre_id INT DEFAULT NULL, niveau_rp_id INT DEFAULT NULL, etudiant_id INT DEFAULT NULL, enseignant_id INT DEFAULT NULL, libcourt VARCHAR(100) NOT NULL, besoin VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, environnement VARCHAR(255) DEFAULT NULL, moyen VARCHAR(255) DEFAULT NULL, date_modif DATE DEFAULT NULL, archivage TINYINT(1) DEFAULT NULL, INDEX IDX_CD578B7C68BE09C (localisation_id), INDEX IDX_CD578B7F6203804 (statut_id), INDEX IDX_CD578B7953C1C61 (source_id), INDEX IDX_CD578B79308DA90 (cadre_id), INDEX IDX_CD578B752680A6A (niveau_rp_id), INDEX IDX_CD578B7DDEAB1A3 (etudiant_id), INDEX IDX_CD578B7E455FCC0 (enseignant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rpactivite (id INT AUTO_INCREMENT NOT NULL, activite_id INT NOT NULL, rp_id INT NOT NULL, commentaire LONGTEXT DEFAULT NULL, INDEX IDX_3CC2747A9B0F88B1 (activite_id), INDEX IDX_3CC2747AB70FF80C (rp_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE semaine_stage (id INT AUTO_INCREMENT NOT NULL, stage_id INT NOT NULL, num_semaine INT NOT NULL, apprentissage VARCHAR(255) DEFAULT NULL, bilan VARCHAR(255) DEFAULT NULL, INDEX IDX_877C1C32298D193 (stage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE source (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE specialite (id INT AUTO_INCREMENT NOT NULL, code VARCHAR(1) NOT NULL, nom VARCHAR(4) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE stage (id INT AUTO_INCREMENT NOT NULL, etudiant_id INT NOT NULL, enseignant_id INT DEFAULT NULL, nom_entreprise VARCHAR(50) NOT NULL, siret VARCHAR(14) NOT NULL, code_naf VARCHAR(5) NOT NULL, num_rue VARCHAR(5) NOT NULL, copos VARCHAR(5) NOT NULL, rue VARCHAR(60) NOT NULL, ville VARCHAR(50) NOT NULL, nom_tuteur VARCHAR(50) NOT NULL, tel_tuteur VARCHAR(15) NOT NULL, mail_tuteur VARCHAR(50) NOT NULL, lieu VARCHAR(50) DEFAULT NULL, sujet VARCHAR(255) NOT NULL, service VARCHAR(50) DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, duree INT NOT NULL, hor_lun VARCHAR(20) DEFAULT NULL, hor_mar VARCHAR(20) DEFAULT NULL, hor_mer VARCHAR(20) DEFAULT NULL, hor_jeu VARCHAR(20) DEFAULT NULL, hor_ven VARCHAR(20) DEFAULT NULL, hor_sam VARCHAR(20) DEFAULT NULL, INDEX IDX_C27C9369DDEAB1A3 (etudiant_id), INDEX IDX_C27C9369E455FCC0 (enseignant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statut (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tache_semaine (id INT AUTO_INCREMENT NOT NULL, domaine_tache_id INT NOT NULL, jour_id INT NOT NULL, semaine_stage_id INT NOT NULL, description VARCHAR(255) NOT NULL, duree DOUBLE PRECISION DEFAULT NULL, INDEX IDX_B11BB55F6542D8E6 (domaine_tache_id), INDEX IDX_B11BB55F220C6AD0 (jour_id), INDEX IDX_B11BB55FE928EFB1 (semaine_stage_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_post (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(80) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_projet (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, etudiant_id INT DEFAULT NULL, enseignant_id INT DEFAULT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, token VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT NULL, statut VARCHAR(2) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649DDEAB1A3 (etudiant_id), UNIQUE INDEX UNIQ_8D93D649E455FCC0 (enseignant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE activite ADD CONSTRAINT FK_B87555155582E9C0 FOREIGN KEY (bloc_id) REFERENCES bloc (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCE455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCB70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
        $this->addSql('ALTER TABLE competence ADD CONSTRAINT FK_94D4687F9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
        $this->addSql('ALTER TABLE enseignant ADD CONSTRAINT FK_81A72FA1F46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere (id)');
        $this->addSql('ALTER TABLE enseignant ADD CONSTRAINT FK_81A72FA1B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3139DF194 FOREIGN KEY (promotion_id) REFERENCES promotion (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E3B3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id)');
        $this->addSql('ALTER TABLE etudiant ADD CONSTRAINT FK_717E22E32195E0F0 FOREIGN KEY (specialite_id) REFERENCES specialite (id)');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C2132B6BDD FOREIGN KEY (groupe_type_id) REFERENCES groupe_type (id)');
        $this->addSql('ALTER TABLE groupe_user ADD CONSTRAINT FK_257BA9FE7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_user ADD CONSTRAINT FK_257BA9FEA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post ADD CONSTRAINT FK_5A8A6C8D714819A0 FOREIGN KEY (type_id_id) REFERENCES type_post (id)');
        $this->addSql('ALTER TABLE post_groupe ADD CONSTRAINT FK_349B68444B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE post_groupe ADD CONSTRAINT FK_349B68447A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE production ADD CONSTRAINT FK_D3EDB1E0B70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
        $this->addSql('ALTER TABLE projet_def_matiere ADD CONSTRAINT FK_C9795E2CD6911079 FOREIGN KEY (projet_def_id) REFERENCES projet_def (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_def_matiere ADD CONSTRAINT FK_C9795E2CF46CD258 FOREIGN KEY (matiere_id) REFERENCES matiere (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_def_enseignant ADD CONSTRAINT FK_2F3C3EC6D6911079 FOREIGN KEY (projet_def_id) REFERENCES projet_def (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_def_enseignant ADD CONSTRAINT FK_2F3C3EC6E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_def_groupe ADD CONSTRAINT FK_DA8DFD5DD6911079 FOREIGN KEY (projet_def_id) REFERENCES projet_def (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_def_groupe ADD CONSTRAINT FK_DA8DFD5D7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_equipe ADD CONSTRAINT FK_6E00A437A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id)');
        $this->addSql('ALTER TABLE projet_equipe_ressource ADD CONSTRAINT FK_DEA0C23F4E78FC5D FOREIGN KEY (projet_equipe_id) REFERENCES projet_equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_equipe_ressource ADD CONSTRAINT FK_DEA0C23FFC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_type_projet_def ADD CONSTRAINT FK_8BF1529E4766D1E2 FOREIGN KEY (projet_type_id) REFERENCES projet_type (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet_type_projet_def ADD CONSTRAINT FK_8BF1529ED6911079 FOREIGN KEY (projet_def_id) REFERENCES projet_def (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ressource_post ADD CONSTRAINT FK_AA356C04FC6CD52A FOREIGN KEY (ressource_id) REFERENCES ressource (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ressource_post ADD CONSTRAINT FK_AA356C044B89032C FOREIGN KEY (post_id) REFERENCES post (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7C68BE09C FOREIGN KEY (localisation_id) REFERENCES localisation (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7953C1C61 FOREIGN KEY (source_id) REFERENCES source (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B79308DA90 FOREIGN KEY (cadre_id) REFERENCES cadre (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B752680A6A FOREIGN KEY (niveau_rp_id) REFERENCES niveau_rp (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE rp ADD CONSTRAINT FK_CD578B7E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE rpactivite ADD CONSTRAINT FK_3CC2747A9B0F88B1 FOREIGN KEY (activite_id) REFERENCES activite (id)');
        $this->addSql('ALTER TABLE rpactivite ADD CONSTRAINT FK_3CC2747AB70FF80C FOREIGN KEY (rp_id) REFERENCES rp (id)');
        $this->addSql('ALTER TABLE semaine_stage ADD CONSTRAINT FK_877C1C32298D193 FOREIGN KEY (stage_id) REFERENCES stage (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE stage ADD CONSTRAINT FK_C27C9369E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55F6542D8E6 FOREIGN KEY (domaine_tache_id) REFERENCES domaine_tache (id)');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55F220C6AD0 FOREIGN KEY (jour_id) REFERENCES jour (id)');
        $this->addSql('ALTER TABLE tache_semaine ADD CONSTRAINT FK_B11BB55FE928EFB1 FOREIGN KEY (semaine_stage_id) REFERENCES semaine_stage (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649DDEAB1A3 FOREIGN KEY (etudiant_id) REFERENCES etudiant (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649E455FCC0 FOREIGN KEY (enseignant_id) REFERENCES enseignant (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competence DROP FOREIGN KEY FK_94D4687F9B0F88B1');
        $this->addSql('ALTER TABLE rpactivite DROP FOREIGN KEY FK_3CC2747A9B0F88B1');
        $this->addSql('ALTER TABLE activite DROP FOREIGN KEY FK_B87555155582E9C0');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B79308DA90');
        $this->addSql('ALTER TABLE tache_semaine DROP FOREIGN KEY FK_B11BB55F6542D8E6');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCE455FCC0');
        $this->addSql('ALTER TABLE projet_def_enseignant DROP FOREIGN KEY FK_2F3C3EC6E455FCC0');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7E455FCC0');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C9369E455FCC0');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649E455FCC0');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7DDEAB1A3');
        $this->addSql('ALTER TABLE stage DROP FOREIGN KEY FK_C27C9369DDEAB1A3');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649DDEAB1A3');
        $this->addSql('ALTER TABLE groupe_user DROP FOREIGN KEY FK_257BA9FE7A45358C');
        $this->addSql('ALTER TABLE post_groupe DROP FOREIGN KEY FK_349B68447A45358C');
        $this->addSql('ALTER TABLE projet_def_groupe DROP FOREIGN KEY FK_DA8DFD5D7A45358C');
        $this->addSql('ALTER TABLE projet_equipe DROP FOREIGN KEY FK_6E00A437A45358C');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C2132B6BDD');
        $this->addSql('ALTER TABLE tache_semaine DROP FOREIGN KEY FK_B11BB55F220C6AD0');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7C68BE09C');
        $this->addSql('ALTER TABLE enseignant DROP FOREIGN KEY FK_81A72FA1F46CD258');
        $this->addSql('ALTER TABLE projet_def_matiere DROP FOREIGN KEY FK_C9795E2CF46CD258');
        $this->addSql('ALTER TABLE enseignant DROP FOREIGN KEY FK_81A72FA1B3E9C81');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3B3E9C81');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B752680A6A');
        $this->addSql('ALTER TABLE post_groupe DROP FOREIGN KEY FK_349B68444B89032C');
        $this->addSql('ALTER TABLE ressource_post DROP FOREIGN KEY FK_AA356C044B89032C');
        $this->addSql('ALTER TABLE projet_def_matiere DROP FOREIGN KEY FK_C9795E2CD6911079');
        $this->addSql('ALTER TABLE projet_def_enseignant DROP FOREIGN KEY FK_2F3C3EC6D6911079');
        $this->addSql('ALTER TABLE projet_def_groupe DROP FOREIGN KEY FK_DA8DFD5DD6911079');
        $this->addSql('ALTER TABLE projet_type_projet_def DROP FOREIGN KEY FK_8BF1529ED6911079');
        $this->addSql('ALTER TABLE projet_equipe_ressource DROP FOREIGN KEY FK_DEA0C23F4E78FC5D');
        $this->addSql('ALTER TABLE projet_type_projet_def DROP FOREIGN KEY FK_8BF1529E4766D1E2');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E3139DF194');
        $this->addSql('ALTER TABLE projet_equipe_ressource DROP FOREIGN KEY FK_DEA0C23FFC6CD52A');
        $this->addSql('ALTER TABLE ressource_post DROP FOREIGN KEY FK_AA356C04FC6CD52A');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCB70FF80C');
        $this->addSql('ALTER TABLE production DROP FOREIGN KEY FK_D3EDB1E0B70FF80C');
        $this->addSql('ALTER TABLE rpactivite DROP FOREIGN KEY FK_3CC2747AB70FF80C');
        $this->addSql('ALTER TABLE tache_semaine DROP FOREIGN KEY FK_B11BB55FE928EFB1');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7953C1C61');
        $this->addSql('ALTER TABLE etudiant DROP FOREIGN KEY FK_717E22E32195E0F0');
        $this->addSql('ALTER TABLE semaine_stage DROP FOREIGN KEY FK_877C1C32298D193');
        $this->addSql('ALTER TABLE rp DROP FOREIGN KEY FK_CD578B7F6203804');
        $this->addSql('ALTER TABLE post DROP FOREIGN KEY FK_5A8A6C8D714819A0');
        $this->addSql('ALTER TABLE groupe_user DROP FOREIGN KEY FK_257BA9FEA76ED395');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('DROP TABLE activite');
        $this->addSql('DROP TABLE bloc');
        $this->addSql('DROP TABLE cadre');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE domaine_tache');
        $this->addSql('DROP TABLE enseignant');
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('DROP TABLE groupe');
        $this->addSql('DROP TABLE groupe_user');
        $this->addSql('DROP TABLE groupe_type');
        $this->addSql('DROP TABLE jour');
        $this->addSql('DROP TABLE libelle');
        $this->addSql('DROP TABLE localisation');
        $this->addSql('DROP TABLE matiere');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE niveau_rp');
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE post_groupe');
        $this->addSql('DROP TABLE production');
        $this->addSql('DROP TABLE projet_def');
        $this->addSql('DROP TABLE projet_def_matiere');
        $this->addSql('DROP TABLE projet_def_enseignant');
        $this->addSql('DROP TABLE projet_def_groupe');
        $this->addSql('DROP TABLE projet_equipe');
        $this->addSql('DROP TABLE projet_equipe_ressource');
        $this->addSql('DROP TABLE projet_type');
        $this->addSql('DROP TABLE projet_type_projet_def');
        $this->addSql('DROP TABLE promotion');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP TABLE ressource_post');
        $this->addSql('DROP TABLE rp');
        $this->addSql('DROP TABLE rpactivite');
        $this->addSql('DROP TABLE semaine_stage');
        $this->addSql('DROP TABLE source');
        $this->addSql('DROP TABLE specialite');
        $this->addSql('DROP TABLE stage');
        $this->addSql('DROP TABLE statut');
        $this->addSql('DROP TABLE tache_semaine');
        $this->addSql('DROP TABLE type_post');
        $this->addSql('DROP TABLE type_projet');
        $this->addSql('DROP TABLE user');
    }
}
