CREATE TABLE `roles`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `role` VARCHAR(255) NOT NULL
);

CREATE TABLE `users`(
    `id` INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `role` INT NOT NULL,
    `password` VARCHAR(255) NOT NULL
);


CREATE TABLE `lists`(
    `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `user` INT NOT NULL,
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE `task_items`(
    `id` INT  NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `list` INT NOT NULL,
    `item` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    `completed` TINYINT(1) NULL
);
ALTER TABLE
    `lists` ADD CONSTRAINT `lists_user_foreign` FOREIGN KEY(`user`) REFERENCES `users`(`id`);
ALTER TABLE
    `task_items` ADD CONSTRAINT `task_items_list_foreign` FOREIGN KEY(`list`) REFERENCES `lists`(`id`);
ALTER TABLE
    `users` ADD CONSTRAINT `users_role_foreign` FOREIGN KEY(`role`) REFERENCES `roles`(`id`);