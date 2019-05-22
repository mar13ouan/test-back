<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190519104401 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE pock (id INT AUTO_INCREMENT NOT NULL, pocket_id INT DEFAULT NULL, pockito_id INT DEFAULT NULL, title_id INT DEFAULT NULL, INDEX IDX_9D407329EB831F59 (pocket_id), INDEX IDX_9D4073299820FF36 (pockito_id), INDEX IDX_9D407329A9F87BD (title_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pocket (id INT AUTO_INCREMENT NOT NULL, __self_id INT DEFAULT NULL, pocket VARCHAR(255) DEFAULT NULL, INDEX IDX_83711A1599D2018D (__self_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pockito (id INT AUTO_INCREMENT NOT NULL, __self_id INT DEFAULT NULL, pockito VARCHAR(255) DEFAULT NULL, INDEX IDX_6B4BFFD199D2018D (__self_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE title (id INT AUTO_INCREMENT NOT NULL, __self_id INT DEFAULT NULL, title VARCHAR(255) DEFAULT NULL, INDEX IDX_2B36786B99D2018D (__self_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pock ADD CONSTRAINT FK_9D407329EB831F59 FOREIGN KEY (pocket_id) REFERENCES pocket (id)');
        $this->addSql('ALTER TABLE pock ADD CONSTRAINT FK_9D4073299820FF36 FOREIGN KEY (pockito_id) REFERENCES pockito (id)');
        $this->addSql('ALTER TABLE pock ADD CONSTRAINT FK_9D407329A9F87BD FOREIGN KEY (title_id) REFERENCES title (id)');
        $this->addSql('ALTER TABLE pocket ADD CONSTRAINT FK_83711A1599D2018D FOREIGN KEY (__self_id) REFERENCES pocket (id)');
        $this->addSql('ALTER TABLE pockito ADD CONSTRAINT FK_6B4BFFD199D2018D FOREIGN KEY (__self_id) REFERENCES pockito (id)');
        $this->addSql('ALTER TABLE title ADD CONSTRAINT FK_2B36786B99D2018D FOREIGN KEY (__self_id) REFERENCES title (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pock DROP FOREIGN KEY FK_9D407329EB831F59');
        $this->addSql('ALTER TABLE pocket DROP FOREIGN KEY FK_83711A1599D2018D');
        $this->addSql('ALTER TABLE pock DROP FOREIGN KEY FK_9D4073299820FF36');
        $this->addSql('ALTER TABLE pockito DROP FOREIGN KEY FK_6B4BFFD199D2018D');
        $this->addSql('ALTER TABLE pock DROP FOREIGN KEY FK_9D407329A9F87BD');
        $this->addSql('ALTER TABLE title DROP FOREIGN KEY FK_2B36786B99D2018D');
        $this->addSql('DROP TABLE pock');
        $this->addSql('DROP TABLE pocket');
        $this->addSql('DROP TABLE pockito');
        $this->addSql('DROP TABLE title');
    }
}
