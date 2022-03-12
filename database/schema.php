<?php

/* In case of foreign key error, use commands above:
 * SET FOREIGN_KEY_CHECKS=0;
 * SET GLOBAL FOREIGN_KEY_CHECKS=0;
 */

$database = env('DB_DATABASE');


// Create table failed_jobs
\DB::select("CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");


// Create/Update column failed_jobs.id
\Schema::hasColumn('failed_jobs', 'id')?
	\DB::select("ALTER TABLE failed_jobs MODIFY COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT"):
	\DB::select("ALTER TABLE failed_jobs ADD COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT");


// Create/Update column failed_jobs.uuid
\Schema::hasColumn('failed_jobs', 'uuid')?
	\DB::select("ALTER TABLE failed_jobs MODIFY COLUMN `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE failed_jobs ADD COLUMN `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column failed_jobs.connection
\Schema::hasColumn('failed_jobs', 'connection')?
	\DB::select("ALTER TABLE failed_jobs MODIFY COLUMN `connection` text COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE failed_jobs ADD COLUMN `connection` text COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column failed_jobs.queue
\Schema::hasColumn('failed_jobs', 'queue')?
	\DB::select("ALTER TABLE failed_jobs MODIFY COLUMN `queue` text COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE failed_jobs ADD COLUMN `queue` text COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column failed_jobs.payload
\Schema::hasColumn('failed_jobs', 'payload')?
	\DB::select("ALTER TABLE failed_jobs MODIFY COLUMN `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE failed_jobs ADD COLUMN `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column failed_jobs.exception
\Schema::hasColumn('failed_jobs', 'exception')?
	\DB::select("ALTER TABLE failed_jobs MODIFY COLUMN `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE failed_jobs ADD COLUMN `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column failed_jobs.failed_at
\Schema::hasColumn('failed_jobs', 'failed_at')?
	\DB::select("ALTER TABLE failed_jobs MODIFY COLUMN `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP"):
	\DB::select("ALTER TABLE failed_jobs ADD COLUMN `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP");


// Create table files
\DB::select("CREATE TABLE IF NOT EXISTS `files` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `mime` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ext` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_text` int(11) DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");


// Create/Update column files.id
\Schema::hasColumn('files', 'id')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT"):
	\DB::select("ALTER TABLE files ADD COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT");


// Create/Update column files.slug
\Schema::hasColumn('files', 'slug')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL");


// Create/Update column files.name
\Schema::hasColumn('files', 'name')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL");


// Create/Update column files.folder
\Schema::hasColumn('files', 'folder')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `folder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `folder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL");


// Create/Update column files.size
\Schema::hasColumn('files', 'size')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `size` int(11) DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `size` int(11) DEFAULT NULL");


// Create/Update column files.mime
\Schema::hasColumn('files', 'mime')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `mime` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `mime` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL");


// Create/Update column files.type
\Schema::hasColumn('files', 'type')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL");


// Create/Update column files.ext
\Schema::hasColumn('files', 'ext')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `ext` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `ext` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL");


// Create/Update column files.is_text
\Schema::hasColumn('files', 'is_text')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `is_text` int(11) DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `is_text` int(11) DEFAULT NULL");


// Create/Update column files.url
\Schema::hasColumn('files', 'url')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL");


// Create/Update column files.content
\Schema::hasColumn('files', 'content')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `content` longtext COLLATE utf8mb4_unicode_ci"):
	\DB::select("ALTER TABLE files ADD COLUMN `content` longtext COLLATE utf8mb4_unicode_ci");


// Create/Update column files.created_at
\Schema::hasColumn('files', 'created_at')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `created_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `created_at` timestamp NULL DEFAULT NULL");


// Create/Update column files.updated_at
\Schema::hasColumn('files', 'updated_at')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `updated_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `updated_at` timestamp NULL DEFAULT NULL");


// Create/Update column files.deleted_at
\Schema::hasColumn('files', 'deleted_at')?
	\DB::select("ALTER TABLE files MODIFY COLUMN `deleted_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE files ADD COLUMN `deleted_at` datetime DEFAULT NULL");


// Create table life_persons
\DB::select("CREATE TABLE IF NOT EXISTS `life_persons` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` enum('female','female-trans','male','male-trans') COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `money` decimal(10,2) DEFAULT NULL,
  `is_dead` int(1) DEFAULT NULL,
  `birth` decimal(10,2) DEFAULT NULL,
  `age` decimal(10,2) DEFAULT NULL,
  `father_id` bigint(20) unsigned DEFAULT NULL,
  `mother_id` bigint(20) unsigned DEFAULT NULL,
  `world_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_life_persons_life_persons` (`father_id`),
  KEY `FK_life_persons_life_persons_2` (`mother_id`),
  KEY `FK_life_persons_life_worlds` (`world_id`),
  CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,
  CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");


// Create/Update column life_persons.id
\Schema::hasColumn('life_persons', 'id')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.name
\Schema::hasColumn('life_persons', 'name')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.gender
\Schema::hasColumn('life_persons', 'gender')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `gender` enum('female','female-trans','male','male-trans') COLLATE utf8_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `gender` enum('female','female-trans','male','male-trans') COLLATE utf8_unicode_ci DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.photo
\Schema::hasColumn('life_persons', 'photo')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.money
\Schema::hasColumn('life_persons', 'money')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `money` decimal(10,2) DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `money` decimal(10,2) DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.is_dead
\Schema::hasColumn('life_persons', 'is_dead')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `is_dead` int(1) DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `is_dead` int(1) DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.birth
\Schema::hasColumn('life_persons', 'birth')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `birth` decimal(10,2) DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `birth` decimal(10,2) DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.age
\Schema::hasColumn('life_persons', 'age')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `age` decimal(10,2) DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `age` decimal(10,2) DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.father_id
\Schema::hasColumn('life_persons', 'father_id')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `father_id` bigint(20) unsigned DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `father_id` bigint(20) unsigned DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.mother_id
\Schema::hasColumn('life_persons', 'mother_id')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `mother_id` bigint(20) unsigned DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `mother_id` bigint(20) unsigned DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.world_id
\Schema::hasColumn('life_persons', 'world_id')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `world_id` bigint(20) unsigned DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `world_id` bigint(20) unsigned DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.created_at
\Schema::hasColumn('life_persons', 'created_at')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `created_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `created_at` datetime DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.updated_at
\Schema::hasColumn('life_persons', 'updated_at')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `updated_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `updated_at` datetime DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons.deleted_at
\Schema::hasColumn('life_persons', 'deleted_at')?
	\DB::select("ALTER TABLE life_persons MODIFY COLUMN `deleted_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons ADD COLUMN `deleted_at` datetime DEFAULT NULL");


// Create fk FK_life_persons_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons` FOREIGN KEY (`father_id`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_persons_2` FOREIGN KEY (`mother_id`) REFERENCES `life_persons` (`id`) ON DELETE CASCADE ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_life_worlds
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_life_worlds'"))->first()) {
	\DB::select("ALTER TABLE `life_persons` ADD CONSTRAINT `FK_life_persons_life_worlds` FOREIGN KEY (`world_id`) REFERENCES `life_worlds` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create table life_persons_interactions
\DB::select("CREATE TABLE IF NOT EXISTS `life_persons_interactions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `person_from` bigint(20) unsigned DEFAULT NULL,
  `person_to` bigint(20) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_life_persons_interactions_life_persons` (`person_from`),
  KEY `FK_life_persons_interactions_life_persons_2` (`person_to`),
  CONSTRAINT `FK_life_persons_interactions_life_persons` FOREIGN KEY (`person_from`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `FK_life_persons_interactions_life_persons_2` FOREIGN KEY (`person_to`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci");


// Create/Update column life_persons_interactions.id
\Schema::hasColumn('life_persons_interactions', 'id')?
	\DB::select("ALTER TABLE life_persons_interactions MODIFY COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT"):
	\DB::select("ALTER TABLE life_persons_interactions ADD COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT");


// Create fk FK_life_persons_interactions_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons` FOREIGN KEY (`person_from`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_interactions_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons_2` FOREIGN KEY (`person_to`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons_interactions.name
\Schema::hasColumn('life_persons_interactions', 'name')?
	\DB::select("ALTER TABLE life_persons_interactions MODIFY COLUMN `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons_interactions ADD COLUMN `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL");


// Create fk FK_life_persons_interactions_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons` FOREIGN KEY (`person_from`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_interactions_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons_2` FOREIGN KEY (`person_to`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons_interactions.type
\Schema::hasColumn('life_persons_interactions', 'type')?
	\DB::select("ALTER TABLE life_persons_interactions MODIFY COLUMN `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons_interactions ADD COLUMN `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL");


// Create fk FK_life_persons_interactions_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons` FOREIGN KEY (`person_from`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_interactions_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons_2` FOREIGN KEY (`person_to`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons_interactions.person_from
\Schema::hasColumn('life_persons_interactions', 'person_from')?
	\DB::select("ALTER TABLE life_persons_interactions MODIFY COLUMN `person_from` bigint(20) unsigned DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons_interactions ADD COLUMN `person_from` bigint(20) unsigned DEFAULT NULL");


// Create fk FK_life_persons_interactions_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons` FOREIGN KEY (`person_from`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_interactions_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons_2` FOREIGN KEY (`person_to`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons_interactions.person_to
\Schema::hasColumn('life_persons_interactions', 'person_to')?
	\DB::select("ALTER TABLE life_persons_interactions MODIFY COLUMN `person_to` bigint(20) unsigned DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons_interactions ADD COLUMN `person_to` bigint(20) unsigned DEFAULT NULL");


// Create fk FK_life_persons_interactions_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons` FOREIGN KEY (`person_from`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_interactions_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons_2` FOREIGN KEY (`person_to`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons_interactions.created_at
\Schema::hasColumn('life_persons_interactions', 'created_at')?
	\DB::select("ALTER TABLE life_persons_interactions MODIFY COLUMN `created_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons_interactions ADD COLUMN `created_at` datetime DEFAULT NULL");


// Create fk FK_life_persons_interactions_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons` FOREIGN KEY (`person_from`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_interactions_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons_2` FOREIGN KEY (`person_to`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons_interactions.updated_at
\Schema::hasColumn('life_persons_interactions', 'updated_at')?
	\DB::select("ALTER TABLE life_persons_interactions MODIFY COLUMN `updated_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons_interactions ADD COLUMN `updated_at` datetime DEFAULT NULL");


// Create fk FK_life_persons_interactions_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons` FOREIGN KEY (`person_from`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_interactions_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons_2` FOREIGN KEY (`person_to`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column life_persons_interactions.deleted_at
\Schema::hasColumn('life_persons_interactions', 'deleted_at')?
	\DB::select("ALTER TABLE life_persons_interactions MODIFY COLUMN `deleted_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE life_persons_interactions ADD COLUMN `deleted_at` datetime DEFAULT NULL");


// Create fk FK_life_persons_interactions_life_persons
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons` FOREIGN KEY (`person_from`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,");
}


// Create fk FK_life_persons_interactions_life_persons_2
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='FK_life_persons_interactions_life_persons_2'"))->first()) {
	\DB::select("ALTER TABLE `life_persons_interactions` ADD CONSTRAINT `FK_life_persons_interactions_life_persons_2` FOREIGN KEY (`person_to`) REFERENCES `life_persons` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create table life_worlds
\DB::select("CREATE TABLE IF NOT EXISTS `life_worlds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_seconds` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");


// Create/Update column life_worlds.id
\Schema::hasColumn('life_worlds', 'id')?
	\DB::select("ALTER TABLE life_worlds MODIFY COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT"):
	\DB::select("ALTER TABLE life_worlds ADD COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT");


// Create/Update column life_worlds.slug
\Schema::hasColumn('life_worlds', 'slug')?
	\DB::select("ALTER TABLE life_worlds MODIFY COLUMN `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE life_worlds ADD COLUMN `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column life_worlds.name
\Schema::hasColumn('life_worlds', 'name')?
	\DB::select("ALTER TABLE life_worlds MODIFY COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE life_worlds ADD COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column life_worlds.year_seconds
\Schema::hasColumn('life_worlds', 'year_seconds')?
	\DB::select("ALTER TABLE life_worlds MODIFY COLUMN `year_seconds` bigint(20) DEFAULT NULL"):
	\DB::select("ALTER TABLE life_worlds ADD COLUMN `year_seconds` bigint(20) DEFAULT NULL");


// Create/Update column life_worlds.created_at
\Schema::hasColumn('life_worlds', 'created_at')?
	\DB::select("ALTER TABLE life_worlds MODIFY COLUMN `created_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE life_worlds ADD COLUMN `created_at` datetime DEFAULT NULL");


// Create/Update column life_worlds.updated_at
\Schema::hasColumn('life_worlds', 'updated_at')?
	\DB::select("ALTER TABLE life_worlds MODIFY COLUMN `updated_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE life_worlds ADD COLUMN `updated_at` datetime DEFAULT NULL");


// Create/Update column life_worlds.deleted_at
\Schema::hasColumn('life_worlds', 'deleted_at')?
	\DB::select("ALTER TABLE life_worlds MODIFY COLUMN `deleted_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE life_worlds ADD COLUMN `deleted_at` datetime DEFAULT NULL");


// Create table migrations
\DB::select("CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");


// Create/Update column migrations.id
\Schema::hasColumn('migrations', 'id')?
	\DB::select("ALTER TABLE migrations MODIFY COLUMN `id` int(10) unsigned NOT NULL AUTO_INCREMENT"):
	\DB::select("ALTER TABLE migrations ADD COLUMN `id` int(10) unsigned NOT NULL AUTO_INCREMENT");


// Create/Update column migrations.migration
\Schema::hasColumn('migrations', 'migration')?
	\DB::select("ALTER TABLE migrations MODIFY COLUMN `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE migrations ADD COLUMN `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column migrations.batch
\Schema::hasColumn('migrations', 'batch')?
	\DB::select("ALTER TABLE migrations MODIFY COLUMN `batch` int(11) NOT NULL"):
	\DB::select("ALTER TABLE migrations ADD COLUMN `batch` int(11) NOT NULL");


// Create table pages
\DB::select("CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pages_owner_id_foreign` (`owner_id`),
  CONSTRAINT `pages_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");


// Create/Update column pages.id
\Schema::hasColumn('pages', 'id')?
	\DB::select("ALTER TABLE pages MODIFY COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT"):
	\DB::select("ALTER TABLE pages ADD COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT");


// Create fk pages_owner_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='pages_owner_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `pages` ADD CONSTRAINT `pages_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column pages.slug
\Schema::hasColumn('pages', 'slug')?
	\DB::select("ALTER TABLE pages MODIFY COLUMN `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE pages ADD COLUMN `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create fk pages_owner_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='pages_owner_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `pages` ADD CONSTRAINT `pages_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column pages.name
\Schema::hasColumn('pages', 'name')?
	\DB::select("ALTER TABLE pages MODIFY COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE pages ADD COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create fk pages_owner_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='pages_owner_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `pages` ADD CONSTRAINT `pages_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column pages.content
\Schema::hasColumn('pages', 'content')?
	\DB::select("ALTER TABLE pages MODIFY COLUMN `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE pages ADD COLUMN `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL");


// Create fk pages_owner_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='pages_owner_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `pages` ADD CONSTRAINT `pages_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column pages.owner_id
\Schema::hasColumn('pages', 'owner_id')?
	\DB::select("ALTER TABLE pages MODIFY COLUMN `owner_id` bigint(20) unsigned DEFAULT NULL"):
	\DB::select("ALTER TABLE pages ADD COLUMN `owner_id` bigint(20) unsigned DEFAULT NULL");


// Create fk pages_owner_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='pages_owner_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `pages` ADD CONSTRAINT `pages_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column pages.created_at
\Schema::hasColumn('pages', 'created_at')?
	\DB::select("ALTER TABLE pages MODIFY COLUMN `created_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE pages ADD COLUMN `created_at` timestamp NULL DEFAULT NULL");


// Create fk pages_owner_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='pages_owner_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `pages` ADD CONSTRAINT `pages_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column pages.updated_at
\Schema::hasColumn('pages', 'updated_at')?
	\DB::select("ALTER TABLE pages MODIFY COLUMN `updated_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE pages ADD COLUMN `updated_at` timestamp NULL DEFAULT NULL");


// Create fk pages_owner_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='pages_owner_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `pages` ADD CONSTRAINT `pages_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column pages.deleted_at
\Schema::hasColumn('pages', 'deleted_at')?
	\DB::select("ALTER TABLE pages MODIFY COLUMN `deleted_at` datetime DEFAULT NULL"):
	\DB::select("ALTER TABLE pages ADD COLUMN `deleted_at` datetime DEFAULT NULL");


// Create fk pages_owner_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='pages_owner_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `pages` ADD CONSTRAINT `pages_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create table password_resets
\DB::select("CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");


// Create/Update column password_resets.email
\Schema::hasColumn('password_resets', 'email')?
	\DB::select("ALTER TABLE password_resets MODIFY COLUMN `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE password_resets ADD COLUMN `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column password_resets.token
\Schema::hasColumn('password_resets', 'token')?
	\DB::select("ALTER TABLE password_resets MODIFY COLUMN `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE password_resets ADD COLUMN `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column password_resets.created_at
\Schema::hasColumn('password_resets', 'created_at')?
	\DB::select("ALTER TABLE password_resets MODIFY COLUMN `created_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE password_resets ADD COLUMN `created_at` timestamp NULL DEFAULT NULL");


// Create table personal_access_tokens
\DB::select("CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");


// Create/Update column personal_access_tokens.id
\Schema::hasColumn('personal_access_tokens', 'id')?
	\DB::select("ALTER TABLE personal_access_tokens MODIFY COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT"):
	\DB::select("ALTER TABLE personal_access_tokens ADD COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT");


// Create/Update column personal_access_tokens.tokenable_type
\Schema::hasColumn('personal_access_tokens', 'tokenable_type')?
	\DB::select("ALTER TABLE personal_access_tokens MODIFY COLUMN `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE personal_access_tokens ADD COLUMN `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column personal_access_tokens.tokenable_id
\Schema::hasColumn('personal_access_tokens', 'tokenable_id')?
	\DB::select("ALTER TABLE personal_access_tokens MODIFY COLUMN `tokenable_id` bigint(20) unsigned NOT NULL"):
	\DB::select("ALTER TABLE personal_access_tokens ADD COLUMN `tokenable_id` bigint(20) unsigned NOT NULL");


// Create/Update column personal_access_tokens.name
\Schema::hasColumn('personal_access_tokens', 'name')?
	\DB::select("ALTER TABLE personal_access_tokens MODIFY COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE personal_access_tokens ADD COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column personal_access_tokens.token
\Schema::hasColumn('personal_access_tokens', 'token')?
	\DB::select("ALTER TABLE personal_access_tokens MODIFY COLUMN `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE personal_access_tokens ADD COLUMN `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column personal_access_tokens.abilities
\Schema::hasColumn('personal_access_tokens', 'abilities')?
	\DB::select("ALTER TABLE personal_access_tokens MODIFY COLUMN `abilities` text COLLATE utf8mb4_unicode_ci"):
	\DB::select("ALTER TABLE personal_access_tokens ADD COLUMN `abilities` text COLLATE utf8mb4_unicode_ci");


// Create/Update column personal_access_tokens.last_used_at
\Schema::hasColumn('personal_access_tokens', 'last_used_at')?
	\DB::select("ALTER TABLE personal_access_tokens MODIFY COLUMN `last_used_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE personal_access_tokens ADD COLUMN `last_used_at` timestamp NULL DEFAULT NULL");


// Create/Update column personal_access_tokens.created_at
\Schema::hasColumn('personal_access_tokens', 'created_at')?
	\DB::select("ALTER TABLE personal_access_tokens MODIFY COLUMN `created_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE personal_access_tokens ADD COLUMN `created_at` timestamp NULL DEFAULT NULL");


// Create/Update column personal_access_tokens.updated_at
\Schema::hasColumn('personal_access_tokens', 'updated_at')?
	\DB::select("ALTER TABLE personal_access_tokens MODIFY COLUMN `updated_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE personal_access_tokens ADD COLUMN `updated_at` timestamp NULL DEFAULT NULL");


// Create table settings
\DB::select("CREATE TABLE IF NOT EXISTS `settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");


// Create/Update column settings.id
\Schema::hasColumn('settings', 'id')?
	\DB::select("ALTER TABLE settings MODIFY COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT"):
	\DB::select("ALTER TABLE settings ADD COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT");


// Create/Update column settings.name
\Schema::hasColumn('settings', 'name')?
	\DB::select("ALTER TABLE settings MODIFY COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE settings ADD COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column settings.value
\Schema::hasColumn('settings', 'value')?
	\DB::select("ALTER TABLE settings MODIFY COLUMN `value` text COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE settings ADD COLUMN `value` text COLLATE utf8mb4_unicode_ci NOT NULL");


// Create/Update column settings.created_at
\Schema::hasColumn('settings', 'created_at')?
	\DB::select("ALTER TABLE settings MODIFY COLUMN `created_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE settings ADD COLUMN `created_at` timestamp NULL DEFAULT NULL");


// Create/Update column settings.updated_at
\Schema::hasColumn('settings', 'updated_at')?
	\DB::select("ALTER TABLE settings MODIFY COLUMN `updated_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE settings ADD COLUMN `updated_at` timestamp NULL DEFAULT NULL");


// Create table users
\DB::select("CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_id` bigint(20) unsigned DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_photo_id_foreign` (`photo_id`),
  CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `files` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci");


// Create/Update column users.id
\Schema::hasColumn('users', 'id')?
	\DB::select("ALTER TABLE users MODIFY COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT"):
	\DB::select("ALTER TABLE users ADD COLUMN `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT");


// Create fk users_photo_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='users_photo_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `users` ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `files` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column users.name
\Schema::hasColumn('users', 'name')?
	\DB::select("ALTER TABLE users MODIFY COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE users ADD COLUMN `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create fk users_photo_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='users_photo_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `users` ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `files` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column users.email
\Schema::hasColumn('users', 'email')?
	\DB::select("ALTER TABLE users MODIFY COLUMN `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE users ADD COLUMN `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create fk users_photo_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='users_photo_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `users` ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `files` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column users.photo_id
\Schema::hasColumn('users', 'photo_id')?
	\DB::select("ALTER TABLE users MODIFY COLUMN `photo_id` bigint(20) unsigned DEFAULT NULL"):
	\DB::select("ALTER TABLE users ADD COLUMN `photo_id` bigint(20) unsigned DEFAULT NULL");


// Create fk users_photo_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='users_photo_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `users` ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `files` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column users.email_verified_at
\Schema::hasColumn('users', 'email_verified_at')?
	\DB::select("ALTER TABLE users MODIFY COLUMN `email_verified_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE users ADD COLUMN `email_verified_at` timestamp NULL DEFAULT NULL");


// Create fk users_photo_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='users_photo_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `users` ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `files` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column users.password
\Schema::hasColumn('users', 'password')?
	\DB::select("ALTER TABLE users MODIFY COLUMN `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL"):
	\DB::select("ALTER TABLE users ADD COLUMN `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL");


// Create fk users_photo_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='users_photo_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `users` ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `files` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column users.remember_token
\Schema::hasColumn('users', 'remember_token')?
	\DB::select("ALTER TABLE users MODIFY COLUMN `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL"):
	\DB::select("ALTER TABLE users ADD COLUMN `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL");


// Create fk users_photo_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='users_photo_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `users` ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `files` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column users.created_at
\Schema::hasColumn('users', 'created_at')?
	\DB::select("ALTER TABLE users MODIFY COLUMN `created_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE users ADD COLUMN `created_at` timestamp NULL DEFAULT NULL");


// Create fk users_photo_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='users_photo_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `users` ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `files` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}


// Create/Update column users.updated_at
\Schema::hasColumn('users', 'updated_at')?
	\DB::select("ALTER TABLE users MODIFY COLUMN `updated_at` timestamp NULL DEFAULT NULL"):
	\DB::select("ALTER TABLE users ADD COLUMN `updated_at` timestamp NULL DEFAULT NULL");


// Create fk users_photo_id_foreign
if (! collect(\DB::select("SELECT * FROM information_schema.REFERENTIAL_CONSTRAINTS WHERE CONSTRAINT_SCHEMA='{$database}' AND CONSTRAINT_NAME='users_photo_id_foreign'"))->first()) {
	\DB::select("ALTER TABLE `users` ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `files` (`id`) ON DELETE SET NULL ON UPDATE SET NULL");
}