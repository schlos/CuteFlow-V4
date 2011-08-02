<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20110725160342 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE cf_settings ADD default_language VARCHAR(10) DEFAULT NULL, ADD default_theme VARCHAR(100) DEFAULT NULL, ADD user_format VARCHAR(30) DEFAULT NULL, ADD use_gravatar TINYINT(1) DEFAULT NULL, ADD smtp_host VARCHAR(255) DEFAULT NULL, ADD smtp_port VARCHAR(5) DEFAULT NULL, ADD smtp_user VARCHAR(255) DEFAULT NULL, ADD smtp_password VARCHAR(255) DEFAULT NULL, DROP defaultLanguage, DROP defaultTheme, DROP userFormat, DROP useGravatar, DROP smtpHost, DROP smtpPort, DROP smtpUser, DROP smtpPassword");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE cf_settings ADD defaultLanguage VARCHAR(10) NOT NULL, ADD defaultTheme VARCHAR(100) NOT NULL, ADD userFormat VARCHAR(30) NOT NULL, ADD useGravatar TINYINT(1) NOT NULL, ADD smtpHost VARCHAR(255) NOT NULL, ADD smtpPort VARCHAR(5) NOT NULL, ADD smtpUser VARCHAR(255) NOT NULL, ADD smtpPassword VARCHAR(255) NOT NULL, DROP default_language, DROP default_theme, DROP user_format, DROP use_gravatar, DROP smtp_host, DROP smtp_port, DROP smtp_user, DROP smtp_password");
    }
}
