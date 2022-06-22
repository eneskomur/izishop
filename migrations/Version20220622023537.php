<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220622023537 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer_order ADD CONSTRAINT FK_3B1CE6A34584665A FOREIGN KEY (product_id) REFERENCES product (id)');
        $this->addSql('CREATE INDEX IDX_3B1CE6A34584665A ON customer_order (product_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customer_order DROP FOREIGN KEY FK_3B1CE6A34584665A');
        $this->addSql('DROP INDEX IDX_3B1CE6A34584665A ON customer_order');
    }
}
