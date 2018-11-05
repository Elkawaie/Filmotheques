<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181105173742 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE film_acteur (film_id INT NOT NULL, acteur_id INT NOT NULL, INDEX IDX_8108EE68567F5183 (film_id), INDEX IDX_8108EE68DA6F574A (acteur_id), PRIMARY KEY(film_id, acteur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE film_realisateur (film_id INT NOT NULL, realisateur_id INT NOT NULL, INDEX IDX_3F2B13F1567F5183 (film_id), INDEX IDX_3F2B13F1F1D8422E (realisateur_id), PRIMARY KEY(film_id, realisateur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE film_acteur ADD CONSTRAINT FK_8108EE68567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE film_acteur ADD CONSTRAINT FK_8108EE68DA6F574A FOREIGN KEY (acteur_id) REFERENCES acteur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE film_realisateur ADD CONSTRAINT FK_3F2B13F1567F5183 FOREIGN KEY (film_id) REFERENCES film (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE film_realisateur ADD CONSTRAINT FK_3F2B13F1F1D8422E FOREIGN KEY (realisateur_id) REFERENCES realisateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE acteur DROP FOREIGN KEY FK_EAFAD362A6506CAF');
        $this->addSql('DROP INDEX IDX_EAFAD362A6506CAF ON acteur');
        $this->addSql('ALTER TABLE acteur DROP fk_film_id');
        $this->addSql('ALTER TABLE film CHANGE titre_du_film titre VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE realisateur DROP FOREIGN KEY FK_47933EFEA6506CAF');
        $this->addSql('DROP INDEX IDX_47933EFEA6506CAF ON realisateur');
        $this->addSql('ALTER TABLE realisateur DROP fk_film_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE film_acteur');
        $this->addSql('DROP TABLE film_realisateur');
        $this->addSql('ALTER TABLE acteur ADD fk_film_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE acteur ADD CONSTRAINT FK_EAFAD362A6506CAF FOREIGN KEY (fk_film_id) REFERENCES film (id)');
        $this->addSql('CREATE INDEX IDX_EAFAD362A6506CAF ON acteur (fk_film_id)');
        $this->addSql('ALTER TABLE film CHANGE titre titre_du_film VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE realisateur ADD fk_film_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE realisateur ADD CONSTRAINT FK_47933EFEA6506CAF FOREIGN KEY (fk_film_id) REFERENCES film (id)');
        $this->addSql('CREATE INDEX IDX_47933EFEA6506CAF ON realisateur (fk_film_id)');
    }
}
