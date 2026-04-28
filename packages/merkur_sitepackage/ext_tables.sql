CREATE TABLE pages (
    tx_merkursitepackage_hero_headline        varchar(255)          DEFAULT ''  NOT NULL,
    tx_merkursitepackage_hero_subheadline     text,
    tx_merkursitepackage_hero_button_text     varchar(255)          DEFAULT ''  NOT NULL,
    tx_merkursitepackage_hero_button_link     text,
    tx_merkursitepackage_hero_bg_image        int(11) unsigned      DEFAULT '0' NOT NULL,

    tx_merkursitepackage_angebot_title        varchar(255)          DEFAULT ''  NOT NULL,
    tx_merkursitepackage_angebot_description  text,
    tx_merkursitepackage_angebot_card1_title  varchar(255)          DEFAULT ''  NOT NULL,
    tx_merkursitepackage_angebot_card1_text   text,
    tx_merkursitepackage_angebot_card2_title  varchar(255)          DEFAULT ''  NOT NULL,
    tx_merkursitepackage_angebot_card2_text   text,
    tx_merkursitepackage_angebot_card3_title  varchar(255)          DEFAULT ''  NOT NULL,
    tx_merkursitepackage_angebot_card3_text   text,

    tx_merkursitepackage_contact_headline     varchar(255)          DEFAULT ''  NOT NULL,
    tx_merkursitepackage_contact_subline      text,
    tx_merkursitepackage_contact_email        varchar(255)          DEFAULT ''  NOT NULL
);
