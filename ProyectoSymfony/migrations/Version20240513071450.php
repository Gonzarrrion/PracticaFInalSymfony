<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240513071450 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE biblioteca (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, direccion LONGTEXT NOT NULL, ciudad VARCHAR(255) NOT NULL, horario_apertura TIME NOT NULL, horario_cierre TIME NOT NULL, fecha_fundacion DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE libro (id INT AUTO_INCREMENT NOT NULL, biblioteca_id INT NOT NULL, titulo VARCHAR(255) NOT NULL, autor VARCHAR(255) NOT NULL, sinopsis LONGTEXT DEFAULT NULL, ano_publicacion DATE NOT NULL, editorial VARCHAR(255) NOT NULL, isbn VARCHAR(255) NOT NULL, num_ejemplares INT NOT NULL, INDEX IDX_5799AD2B6A5EDAE9 (biblioteca_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE libro ADD CONSTRAINT FK_5799AD2B6A5EDAE9 FOREIGN KEY (biblioteca_id) REFERENCES biblioteca (id)');
        $this->addSql('ALTER TABLE libros DROP FOREIGN KEY libros_ibfk_1');
        $this->addSql('DROP TABLE bibliotecas');
        $this->addSql('DROP TABLE libros');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE bibliotecas (id INT AUTO_INCREMENT NOT NULL COMMENT \'Primary Key\', Nombre VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci` COMMENT \'Nombre\', Direccion TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci` COMMENT \'Direccion\', Ciudad VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci` COMMENT \'Ciudad\', HorarioApertura TIME DEFAULT NULL COMMENT \'Horario de Apertura\', HorarioCierre TIME DEFAULT NULL COMMENT \'Horario de Cierre\', FechaFundacion DATE DEFAULT NULL COMMENT \'Fecha de Fundacion\', normasName VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci` COMMENT \'Nombre del archivo de normas\', updatedAt DATETIME DEFAULT NULL COMMENT \'Fecha de actualización\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE libros (id INT AUTO_INCREMENT NOT NULL COMMENT \'Primary Key\', biblioteca_id INT DEFAULT NULL, titulo VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci` COMMENT \'Titulo\', autor VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci` COMMENT \'Autor\', sinopsis TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci` COMMENT \'Sinopsis\', ano_publicacion DATE DEFAULT NULL COMMENT \'Año de Publicacion\', editorial VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci` COMMENT \'Editorial\', isbn VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_0900_ai_ci` COMMENT \'ISBN\', num_ejemplares INT DEFAULT NULL COMMENT \'Número de Ejemplares\', INDEX biblioteca_id (biblioteca_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE libros ADD CONSTRAINT libros_ibfk_1 FOREIGN KEY (biblioteca_id) REFERENCES bibliotecas (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE libro DROP FOREIGN KEY FK_5799AD2B6A5EDAE9');
        $this->addSql('DROP TABLE biblioteca');
        $this->addSql('DROP TABLE libro');
    }
}
