CREATE TABLE posts (
    id CHAR(36) PRIMARY KEY COMMENT 'Primary Key UUID',
    title VARCHAR(255) COMMENT 'The title of the blog post',
    slug VARCHAR(255) COMMENT 'A human and SEO friendly lookup key',
    meta_keywords VARCHAR(255) COMMENT 'Meta data for SEO',
    meta_description VARCHAR(255) COMMENT 'Meta data for SEO',
    body TEXT COMMENT 'The content of the blog post',
    user_id CHAR(36) COMMENT 'The creator of the blog post',
    created DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'When the post was created',
    modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'When the post was last edited'
) ENGINE=INNODB;
