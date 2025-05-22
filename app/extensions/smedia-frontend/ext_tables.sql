--
-- Add SQL definition of database tables
--

#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
  fullsize tinyint(1) unsigned DEFAULT '0',
  gap int(11) unsigned DEFAULT '0',
  bg_color varchar(255) DEFAULT '' NOT NULL,
  two_col_distribution int(11) unsigned DEFAULT '0',
);
