<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210627125820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE product (id INT AUTO_INCREMENT NOT NULL, `name` VARCHAR(255) NOT NULL, picture_file_name VARCHAR(255) DEFAULT NULL, food_group VARCHAR(255) NOT NULL, food_group_id INT NOT NULL, food_subgroup VARCHAR(255) NOT NULL, food_subgroup_id INT NOT NULL, `status` INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `profile` (id INT AUTO_INCREMENT NOT NULL, `name` VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profile_product (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, product_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profile_recipe (id INT AUTO_INCREMENT NOT NULL, profile_id INT NOT NULL, recipe_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe (id INT AUTO_INCREMENT NOT NULL, `name` VARCHAR(255) NOT NULL, picture_file_name VARCHAR(255) DEFAULT NULL, ingredients_list VARCHAR(3500) NOT NULL, steps VARCHAR(3500) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipe_product (id INT AUTO_INCREMENT NOT NULL, recipe_id INT NOT NULL, product_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE profile');
        $this->addSql('DROP TABLE profile_product');
        $this->addSql('DROP TABLE profile_recipe');
        $this->addSql('DROP TABLE recipe');
        $this->addSql('DROP TABLE recipe_product');
    }
}
