-- Database: hmisphp
# DROP DATABASE IF EXISTS hmisphp;
# CREATE DATABASE hmisphp;
# USE hmisphp;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Table structure for table `his_accounts`
CREATE TABLE `his_accounts`
(
    `acc_id`     int(200) NOT NULL,
    `acc_name`   varchar(200) DEFAULT NULL,
    `acc_desc`   text,
    `acc_type`   varchar(200) DEFAULT NULL,
    `acc_number` varchar(200) DEFAULT NULL,
    `acc_amount` varchar(200) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_accounts`
INSERT INTO `his_accounts` (`acc_id`, `acc_name`, `acc_desc`, `acc_type`, `acc_number`, `acc_amount`)
VALUES (1, 'Individual Retirement Account',
        '<p>IRA&rsquo;s are simply an account where you stash your money for retirement...</p>', 'Payable Account',
        '518703294', '25000'),
       (2, 'Equity Bank', '<p>Find <em>bank account</em> stock <em>images</em> in HD and millions...</p>',
        'Receivable Account', '753680912', '12566'),
       (3, 'Test Account Name', '<p>This is a demo test</p>', 'Payable Account', '620157843', '1100');

-- Table structure for table `his_admin`
CREATE TABLE `his_admin`
(
    `ad_id`    int(20) NOT NULL,
    `ad_fname` varchar(200) DEFAULT NULL,
    `ad_lname` varchar(200) DEFAULT NULL,
    `ad_email` varchar(200) DEFAULT NULL,
    `ad_pwd`   varchar(200) DEFAULT NULL,
    `ad_dpic`  varchar(200) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_admin`
INSERT INTO `his_admin` (`ad_id`, `ad_fname`, `ad_lname`, `ad_email`, `ad_pwd`, `ad_dpic`)
VALUES (1, 'System', 'Administrator', 'admin@mail.com', '4c7f5919e957f354d57243d37f223cf31e9e7181', 'doc-icon.png');

-- Table structure for table `his_assets`
CREATE TABLE `his_assets`
(
    `asst_id`     int(20) NOT NULL,
    `asst_name`   varchar(200) DEFAULT NULL,
    `asst_desc`   longtext,
    `asst_vendor` varchar(200) DEFAULT NULL,
    `asst_status` varchar(200) DEFAULT NULL,
    `asst_dept`   varchar(200) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Table structure for table `his_docs`
CREATE TABLE `his_docs`
(
    `doc_id`     int(20) NOT NULL,
    `doc_fname`  varchar(200) DEFAULT NULL,
    `doc_lname`  varchar(200) DEFAULT NULL,
    `doc_email`  varchar(200) DEFAULT NULL,
    `doc_pwd`    varchar(200) DEFAULT NULL,
    `doc_dept`   varchar(200) DEFAULT NULL,
    `doc_number` varchar(200) DEFAULT NULL,
    `doc_dpic`   varchar(200) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_docs`
INSERT INTO `his_docs` (`doc_id`, `doc_fname`, `doc_lname`, `doc_email`, `doc_pwd`, `doc_dept`, `doc_number`,
                        `doc_dpic`)
VALUES (5, 'Sokvisal', 'Sean', 'visal123@gmail.com', '6a01ab61bc2be81e510e72f15389a8be9547e3a3', 'General doctor',
        'visal', 'defaultimg.jpg'),
       (6, 'Pheakdey', 'Chhun', 'pkd123@gmail.com', 'b19b493768d003d637306e4e90b8a8d3aead4e69', 'General doctor', 'pkd',
        'user-default-2-min.png'),
       (12, 'Somaly', 'Chey', 'somaly123@gmail.com', '36355b63ac86fe0cb257481a23a5b5962307b426', 'General doctor',
        'somaly', 'usric.png');

-- Table structure for table `his_equipments`
CREATE TABLE `his_equipments`
(
    `eqp_id`     int(20) NOT NULL,
    `eqp_code`   varchar(200) DEFAULT NULL,
    `eqp_name`   varchar(200) DEFAULT NULL,
    `eqp_vendor` varchar(200) DEFAULT NULL,
    `eqp_desc`   longtext,
    `eqp_dept`   varchar(200) DEFAULT NULL,
    `eqp_status` varchar(200) DEFAULT NULL,
    `eqp_qty`    varchar(200) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_equipments`
INSERT INTO `his_equipments` (`eqp_id`, `eqp_code`, `eqp_name`, `eqp_vendor`, `eqp_desc`, `eqp_dept`, `eqp_status`,
                              `eqp_qty`)
VALUES (2, '178640239', 'TestTubes', 'Casio', '<p>Testtubes are used to perform lab tests--</p>', 'Laboratory',
        'Functioning', '700000'),
       (3, '052367981', 'Surgical Robot', 'Nexus', '<p>Surgical Robots aid in surgey process.</p>',
        'Surgical | Theatre', 'Functioning', '100');

-- Table structure for table `his_laboratory`
CREATE TABLE `his_laboratory`
(
    `lab_id`          int(20)   NOT NULL,
    `lab_pat_name`    varchar(200)   DEFAULT NULL,
    `lab_pat_ailment` varchar(200)   DEFAULT NULL,
    `lab_pat_number`  varchar(200)   DEFAULT NULL,
    `lab_pat_tests`   longtext,
    `lab_pat_results` longtext,
    `lab_number`      varchar(200)   DEFAULT NULL,
    `lab_date_rec`    timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_laboratory`
INSERT INTO `his_laboratory` (`lab_id`, `lab_pat_name`, `lab_pat_ailment`, `lab_pat_number`, `lab_pat_tests`,
                              `lab_pat_results`, `lab_number`, `lab_date_rec`)
VALUES (1, 'Lorem Ipsum ', 'Flu', '7EW0L',
        '<ul><li><a href=\"https://www.medicalnewstoday.com/articles/179211.php\">Non-steroidal anti-inflammatory drugs</a> (NSAIDs) such as <a href=\"https://www.medicalnewstoday.com/articles/161255.php\">aspirin</a> or ibuprofen can help bring a fever down...</li></ul>',
        '<ul><li>If the fever has been caused by a bacterial infection, the doctor may prescribe an <a href=\"https://www.medicalnewstoday.com/articles/10278.php\">antibiotic</a>...</li></ul>',
        'K67PL', '2020-01-12 13:32:07'),
       (2, 'Mart Developers', 'Fever', '6P8HJ',
        '<ul><li>Body temperature</li><li>Blood</li><li>Stool</li><li>Urine</li></ul>',
        '<ul><li>Body Temperature 67 Degree Celcious(Abnormal)</li><li>Blood - Malaria Bacterial Tested Postive</li><li>Stool - Mucus tested postive</li><li>Urine -Urea Level were 20% higher than normal</li></ul><p><strong>Fever Tested Positive</strong></p>',
        '9DMN5', '2020-01-12 13:41:07'),
       (3, 'John Doe', 'Malaria', 'RAV6C',
        '<p><strong>Pain areas: </strong>in the abdomen or muscles</p><p><strong>Whole body: </strong>chills, fatigue, fever, night sweats, shivering, or sweating</p>',
        '<p><strong>Pain areas: </strong>in the abdomen or muscles -Tested Positive</p><p><strong>Whole body: </strong>chills, fatigue, fever, night sweats, shivering, or sweating - Tested Positive</p>',
        '90ZNX', '2020-01-13 12:31:48'),
       (4, 'Cynthia Connolly', 'Demo Test', '3Z14K', '<p>demo demo demo demo</p>', '<p>54545</p>', 'G0VZU',
        '2022-10-20 17:48:05'),
       (5, 'Christine Moore', 'Demo Test', '4TLG0',
        '<ol><li>Test One</li><li>Test Two</li><li>Test Three</li><li>Test Four</li><li>Test Five</li></ol>',
        '<ol><li>Result One</li><li>Result Two</li><li>Result Three</li></ol>', 'RA4UM', '2022-10-22 11:01:11');

-- Table structure for table `his_medical_records`
CREATE TABLE `his_medical_records`
(
    `mdr_id`          int(20)      NOT NULL,
    `mdr_number`      varchar(200)          DEFAULT NULL,
    `mdr_pat_name`    varchar(200)          DEFAULT NULL,
    `mdr_pat_adr`     varchar(200)          DEFAULT NULL,
    `mdr_pat_age`     varchar(200)          DEFAULT NULL,
    `mdr_pat_ailment` varchar(200)          DEFAULT NULL,
    `mdr_pat_number`  varchar(200)          DEFAULT NULL,
    `mdr_pat_prescr`  longtext,
    `mdr_date_rec`    timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_medical_records`
INSERT INTO `his_medical_records` (`mdr_id`, `mdr_number`, `mdr_pat_name`, `mdr_pat_adr`, `mdr_pat_age`,
                                   `mdr_pat_ailment`, `mdr_pat_number`, `mdr_pat_prescr`, `mdr_date_rec`)
VALUES (1, 'ZNXI4', 'John Doe', '12 900 Los Angeles', '35', 'Malaria', 'RAV6C',
        '<ul><li>Combination of atovaquone and proguanil (Malarone)</li><li>Quinine sulfate (Qualaquin) with doxycycline (Vibramycin, Monodox, others)</li><li>Mefloquine.</li><li>Primaquine phosphate.</li></ul>',
        '2020-01-11 15:03:05.9839'),
       (2, 'MIA9P', 'Cynthia Connolly', '9 Hill Haven Drive', '22', 'Demo Test', '3Z14K', NULL,
        '2022-10-18 17:07:46.7306'),
       (3, 'F1ZHQ', 'Michael White', '60 Radford Street', '30', 'Demo Test', 'DCRI8', NULL, '2022-10-18 17:08:35.7938'),
       (4, 'ZLN0Q', 'Lawrence Bischof', '82 Bryan Street', '32', 'Demo Test', 'ISL1E',
        '<ol><li>sample</li><li>sampl</li><li>sample</li><li>sample</li></ol>', '2022-10-20 17:22:15.7034');

-- Table structure for table `his_patients`
# drop table his_patients;
# select * from his_patients;
CREATE TABLE `his_patients`
(
    `pat_id`               INT(20) NOT NULL AUTO_INCREMENT,
    `pat_fname`            VARCHAR(200) DEFAULT NULL,
    `pat_lname`            VARCHAR(200) DEFAULT NULL,
    `pat_dob`              VARCHAR(200) DEFAULT NULL,
    `pat_age`              VARCHAR(200) DEFAULT NULL,
    `pat_number`           VARCHAR(200) DEFAULT NULL,
    `pat_addr`             VARCHAR(200) DEFAULT NULL,
    `pat_phone`            VARCHAR(200) DEFAULT NULL,
    `pat_type`             VARCHAR(200) DEFAULT NULL,
    `pat_date_joined`      TIMESTAMP(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
    `pat_ailment`          VARCHAR(200) DEFAULT NULL,
    `pat_discharge_status` VARCHAR(200) DEFAULT NULL,
    `pat_discharge_date`   DATETIME DEFAULT NULL,
    `pat_discharge_notes`  TEXT DEFAULT NULL,
    `created_at`           DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at`           DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`pat_id`)
) ENGINE=InnoDB
  DEFAULT CHARSET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;


-- ទិន្នន័យសម្រាប់តារាង `his_patients`
INSERT INTO his_patients
(pat_fname, pat_lname, pat_dob, pat_age, pat_number, pat_addr, pat_phone, pat_type, pat_ailment, pat_discharge_status, pat_discharge_date, pat_discharge_notes)
VALUES
    ('John', 'Doe', '1990-01-01', '35', 'A0001', '123 Main St', '555-1234', 'Inpatient', 'Flu', NULL, NULL, NULL),
    ('Jane', 'Smith', '1985-05-05', '40', 'A0002', '456 Park Ave', '555-5678', 'Outpatient', 'Cough', NULL, NULL, NULL),
    ('Michael', 'Brown', '1978-10-15', '46', 'A0003', '789 Oak Rd', '555-9876', 'Inpatient', 'Fracture', 'Recovered', '2025-08-10 14:30:00', 'Patient discharged with full recovery.'),
    ('Emily', 'Clark', '1995-03-12', '30', 'A0004', '321 Pine Ln', '555-2468', 'Outpatient', 'Allergy', NULL, NULL, NULL);



-- Table structure for table `his_patient_transfers`
CREATE TABLE `his_patient_transfers`
(
    `t_id`         int(20) NOT NULL AUTO_INCREMENT,
    `t_hospital`   varchar(200) DEFAULT NULL,
    `t_date`       varchar(200) DEFAULT NULL,
    `t_pat_name`   varchar(200) DEFAULT NULL,
    `t_pat_number` varchar(200) DEFAULT NULL,
    `t_status`     varchar(200) DEFAULT NULL,
    PRIMARY KEY (`t_id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;
# drop table his_patient_transfers;
-- Data for table `his_patient_transfers`
INSERT INTO `his_patient_transfers` (`t_id`, `t_hospital`, `t_date`, `t_pat_name`, `t_pat_number`, `t_status`)
VALUES (1, 'Kenyatta National Hospital', '2020-01-11', 'Mart Developers', '9KXPM', 'Success');

-- Table structure for table `his_payrolls`
CREATE TABLE `his_payrolls`
(
    `pay_id`             int(20)      NOT NULL,
    `pay_number`         varchar(200)          DEFAULT NULL,
    `pay_doc_name`       varchar(200)          DEFAULT NULL,
    `pay_doc_number`     varchar(200)          DEFAULT NULL,
    `pay_doc_email`      varchar(200)          DEFAULT NULL,
    `pay_emp_salary`     varchar(200)          DEFAULT NULL,
    `pay_date_generated` timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4),
    `pay_status`         varchar(200)          DEFAULT NULL,
    `pay_descr`          longtext
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_payrolls`
INSERT INTO `his_payrolls` (`pay_id`, `pay_number`, `pay_doc_name`, `pay_doc_number`, `pay_doc_email`, `pay_emp_salary`,
                            `pay_date_generated`, `pay_status`, `pay_descr`)
VALUES (2, 'HUT1B', 'Henry Doe', 'N8TI0', 'henryd@hms.org', '7555', '2022-10-20 17:14:18.3708', 'Paid',
        '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>'),
       (3, 'T294L', 'Bryan Arreola', 'YDS7L', 'bryan@mail.com', '15500', '2022-10-20 17:14:50.5588', NULL,
        '<p>demo demo demo demo demo</p>'),
       (4, '3UOXY', 'Jessica Spencer', '5VIFT', 'jessica@mail.com', '4150', '2022-10-22 11:04:36.9626', NULL,
        '<p>This is a demo payroll description for test!!</p>');

-- Table structure for table `his_pharmaceuticals`
CREATE TABLE `his_pharmaceuticals`
(
    `phar_id`     int(20) NOT NULL,
    `phar_name`   varchar(200) DEFAULT NULL,
    `phar_bcode`  varchar(200) DEFAULT NULL,
    `phar_desc`   longtext,
    `phar_qty`    varchar(200) DEFAULT NULL,
    `phar_cat`    varchar(200) DEFAULT NULL,
    `phar_vendor` varchar(200) DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_pharmaceuticals`
INSERT INTO `his_pharmaceuticals` (`phar_id`, `phar_name`, `phar_bcode`, `phar_desc`, `phar_qty`, `phar_cat`,
                                   `phar_vendor`)
VALUES (1, 'Paracetamol', '134057629',
        '<ul><li><strong>Paracetamol</strong>, also known as <strong>acetaminophen</strong> and <strong>APAP</strong>, is a medication used to treat <a href=\"https://en.wikipedia.org/wiki/Pain\">pain</a> and <a href=\"https://en.wikipedia.org/wiki/Fever\">fever</a>...</li></ul>',
        '500', 'Antipyretics', 'Dawa Limited Kenya'),
       (2, 'Aspirin', '452760813',
        '<ul><li><strong>Aspirin</strong>, also known as <strong>acetylsalicylic acid</strong> (<strong>ASA</strong>), is a <a href=\"https://en.wikipedia.org/wiki/Medication\">medication</a> used to reduce <a href=\"https://en.wikipedia.org/wiki/Pain\">pain</a>, <a href=\"https://en.wikipedia.org/wiki/Fever\">fever</a>, or <a href=\"https://en.wikipedia.org/wiki/Inflammation\">inflammation</a>...</li></ul>',
        '500', 'Analgesics', 'Cosmos Kenya Limited'),
       (3, 'Test Pharma', '465931288',
        '<p>This is a demo test.&nbsp;This is a demo test.&nbsp;This is a demo test.</p>', '36', 'Antibiotics',
        'Cosmos Pharmaceutical Limited');

-- Table structure for table `his_pharmaceuticals_categories`
CREATE TABLE `his_pharmaceuticals_categories`
(
    `pharm_cat_id`     int(20) NOT NULL,
    `pharm_cat_name`   varchar(200) DEFAULT NULL,
    `pharm_cat_vendor` varchar(200) DEFAULT NULL,
    `pharm_cat_desc`   longtext
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_pharmaceuticals_categories`
INSERT INTO `his_pharmaceuticals_categories` (`pharm_cat_id`, `pharm_cat_name`, `pharm_cat_vendor`, `pharm_cat_desc`)
VALUES (1, 'Antipyretics', 'Cosmos Kenya Limited',
        '<ul><li>An <strong>antipyretic</strong> is a substance that reduces <a href=\"https://en.wikipedia.org/wiki/Fever\">fever</a>...</li></ul>'),
       (2, 'Analgesics', 'Dawa Limited Kenya',
        '<ul><li><p>An <strong>analgesic</strong> or <strong>painkiller</strong> is any member of the group of <a href=\"https://en.wikipedia.org/wiki/Pharmaceutical_drug\">drugs</a> used to achieve analgesia, relief from <a href=\"https://en.wikipedia.org/wiki/Pain\">pain</a>...</p></li></ul>'),
       (3, 'Antibiotics', 'Cosmos Kenya Limited', '<p>Antibiotics</p>');

-- Table structure for table `his_prescriptions`
CREATE TABLE `his_prescriptions`
(
    `pres_id`          int(200)     NOT NULL AUTO_INCREMENT,
    `pres_pat_name`    varchar(200)          DEFAULT NULL,
    `pres_pat_age`     varchar(200)          DEFAULT NULL,
    `pres_pat_number`  varchar(200)          DEFAULT NULL,
    `pres_number`      varchar(200)          DEFAULT NULL,
    `pres_pat_addr`    varchar(200)          DEFAULT NULL,
    `pres_pat_type`    varchar(200)          DEFAULT NULL,
    `pres_date`        timestamp(4) NOT NULL DEFAULT CURRENT_TIMESTAMP(4) ON UPDATE CURRENT_TIMESTAMP(4),
    `pres_pat_ailment` varchar(200)          DEFAULT NULL,
    `pres_ins`         longtext              DEFAULT NULL,
    PRIMARY KEY (`pres_id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_prescriptions`
INSERT INTO `his_prescriptions` (`pres_id`, `pres_pat_name`, `pres_pat_age`, `pres_pat_number`, `pres_number`,
                                 `pres_pat_addr`, `pres_pat_type`, `pres_date`, `pres_pat_ailment`, `pres_ins`)
VALUES (3, 'Mart Developers', '23', '6P8HJ', 'J9DC6', '127001 LocalHost', 'InPatient', '2020-01-11 12:32:39.6963',
        'Fever',
        '<ul><li><a href=\"https://www.medicalnewstoday.com/articles/179211.php\">Non-steroidal anti-inflammatory drugs</a> (NSAIDs) such as <a href=\"https://www.medicalnewstoday.com/articles/161255.php\">aspirin</a> or ibuprofen can help bring a fever down...</li></ul>'),
       (4, 'John Doe', '30', 'RAV6C', 'HZQ8J', '12 900 NYE', 'OutPatient', '2020-01-11 13:08:46.7368', 'Malaria',
        '<ul><li>Combination of atovaquone and proguanil (Malarone)</li><li>Quinine sulfate (Qualaquin) with doxycycline (Vibramycin, Monodox, others)</li><li>Mefloquine.</li><li>Primaquine phosphate.</li></ul>'),
       (5, 'Lorem Ipsum', '10', '7EW0L', 'HQC3D', '12 9001 Machakos', 'OutPatient', '2020-01-13 12:19:30.3702', 'Flu',
        '<ul><li><a href=\"https://www.google.com/search?client=firefox-b-e&amp;sxsrf=ACYBGNRW3vlJoag6iJInWVOTtTG_HUTedA:1578917913108&amp;q=flu+decongestant&amp;stick=H4sIAAAAAAAAAOMQFeLQz9U3SK5MTlbiBLGMktNzcnYxMRosYhVIyylVSElNzs9LTy0uScwrAQBMMnd5LgAAAA&amp;sa=X&amp;ved=2ahUKEwjRhNzKx4DnAhUcBGMBHYs1A24Q0EAwFnoECAwQHw\">Decongestant</a></li></ul>'),
       (6, 'Christine Moore', '28', '4TLG0', '09Y2P', '117 Bleecker Street', 'InPatient', '2022-10-22 10:57:10.7496',
        'Demo Test',
        '<ol><li>This is a demo prescription.</li><li>This is a second demo prescription.</li><li>And this one\'s third!</li></ol>');

-- Table structure for table `his_pwdresets`
CREATE TABLE `his_pwdresets`
(
    `id`    int(20)      NOT NULL,
    `email` varchar(200) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Table structure for table `his_surgery`
CREATE TABLE `his_surgery`
(
    `s_id`          int(200)     NOT NULL,
    `s_number`      varchar(200)          DEFAULT NULL,
    `s_doc`         varchar(200)          DEFAULT NULL,
    `s_pat_number`  varchar(200)          DEFAULT NULL,
    `s_pat_name`    varchar(200)          DEFAULT NULL,
    `s_pat_ailment` varchar(200)          DEFAULT NULL,
    `s_pat_date`    timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
    `s_pat_status`  varchar(200)          DEFAULT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_surgery`
INSERT INTO `his_surgery` (`s_id`, `s_number`, `s_doc`, `s_pat_number`, `s_pat_name`, `s_pat_ailment`, `s_pat_date`,
                           `s_pat_status`)
VALUES (2, '8KQWD', 'Martin Mbithi', 'RAV6C', 'John Doe', 'Malaria', '2020-01-13 08:50:10.649889', 'Successful'),
       (3, '7K18R', 'Bryan Arreola', '3Z14K', 'Cynthia Connolly', 'Demo Test', '2022-10-18 17:26:44.053571',
        'Successful'),
       (4, 'ECF62', 'Bryan Arreola', '4TLG0', 'Christine Moore', 'Demo Test', '2022-10-22 11:03:33.765255',
        'Successful');

-- Table structure for table `his_vendor`
CREATE TABLE `his_vendor`
(
    `v_id`     int(20) NOT NULL,
    `v_number` varchar(200) DEFAULT NULL,
    `v_name`   varchar(200) DEFAULT NULL,
    `v_adr`    varchar(200) DEFAULT NULL,
    `v_mobile` varchar(200) DEFAULT NULL,
    `v_email`  varchar(200) DEFAULT NULL,
    `v_phone`  varchar(200) DEFAULT NULL,
    `v_desc`   longtext
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_vendor`
INSERT INTO `his_vendor` (`v_id`, `v_number`, `v_name`, `v_adr`, `v_mobile`, `v_email`, `v_phone`, `v_desc`)
VALUES (1, '6ISKC', 'Cosmos Pharmaceutical Limited', 'P.O. Box 41433, GPO 00100 Nairobi, Kenya', '',
        'info@cosmospharmaceuticallimited.com', '+254(20)550700-9',
        '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</p>');

-- Table structure for table `his_vitals`
CREATE TABLE `his_vitals`
(
    `vit_id`         int(20)      NOT NULL,
    `vit_number`     varchar(200)          DEFAULT NULL,
    `vit_pat_number` varchar(200)          DEFAULT NULL,
    `vit_bodytemp`   varchar(200)          DEFAULT NULL,
    `vit_heartpulse` varchar(200)          DEFAULT NULL,
    `vit_resprate`   varchar(200)          DEFAULT NULL,
    `vit_bloodpress` varchar(200)          DEFAULT NULL,
    `vit_daterec`    timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4
  COLLATE = utf8mb4_unicode_ci;

-- Data for table `his_vitals`
INSERT INTO `his_vitals` (`vit_id`, `vit_number`, `vit_pat_number`, `vit_bodytemp`, `vit_heartpulse`, `vit_resprate`,
                          `vit_bloodpress`, `vit_daterec`)
VALUES (3, '1KB9V', '3Z14K', '38', '77', '12', '90/60', '2022-10-18 17:10:16.904915'),
       (4, 'ELYOM', 'BKTWQ', '38', '88', '12', '110/80', '2022-10-18 01:49:55.814783'),
       (5, 'AL0J8', 'YDS7L', '36', '72', '15', '90/60', '2022-10-18 17:42:17.500662'),
       (6, 'MS2OJ', '4TLG0', '37', '70', '15', '120/80', '2022-10-22 11:01:52.148658');

-- Indexes
ALTER TABLE `his_accounts`
    ADD PRIMARY KEY (`acc_id`);
ALTER TABLE `his_admin`
    ADD PRIMARY KEY (`ad_id`);
ALTER TABLE `his_assets`
    ADD PRIMARY KEY (`asst_id`);
ALTER TABLE `his_docs`
    ADD PRIMARY KEY (`doc_id`);
ALTER TABLE `his_equipments`
    ADD PRIMARY KEY (`eqp_id`);
ALTER TABLE `his_laboratory`
    ADD PRIMARY KEY (`lab_id`);
ALTER TABLE `his_medical_records`
    ADD PRIMARY KEY (`mdr_id`);
ALTER TABLE `his_patients`
    ADD PRIMARY KEY (`pat_id`);
ALTER TABLE `his_patient_transfers`
    ADD PRIMARY KEY (`t_id`);
ALTER TABLE `his_payrolls`
    ADD PRIMARY KEY (`pay_id`);
ALTER TABLE `his_pharmaceuticals`
    ADD PRIMARY KEY (`phar_id`);
ALTER TABLE `his_pharmaceuticals_categories`
    ADD PRIMARY KEY (`pharm_cat_id`);
ALTER TABLE `his_prescriptions`
    ADD PRIMARY KEY (`pres_id`);
ALTER TABLE `his_pwdresets`
    ADD PRIMARY KEY (`id`);
ALTER TABLE `his_surgery`
    ADD PRIMARY KEY (`s_id`);
ALTER TABLE `his_vendor`
    ADD PRIMARY KEY (`v_id`);
ALTER TABLE `his_vitals`
    ADD PRIMARY KEY (`vit_id`);

-- AUTO_INCREMENT
ALTER TABLE `his_accounts`
    MODIFY `acc_id` int(200) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;
ALTER TABLE `his_admin`
    MODIFY `ad_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;
ALTER TABLE `his_assets`
    MODIFY `asst_id` int(20) NOT NULL AUTO_INCREMENT;
ALTER TABLE `his_docs`
    MODIFY `doc_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 13;
ALTER TABLE `his_equipments`
    MODIFY `eqp_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;
ALTER TABLE `his_laboratory`
    MODIFY `lab_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 6;
ALTER TABLE `his_medical_records`
    MODIFY `mdr_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;
ALTER TABLE `his_patients`
    MODIFY `pat_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 13;
ALTER TABLE `his_patient_transfers`
    MODIFY `t_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;
ALTER TABLE `his_payrolls`
    MODIFY `pay_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;
ALTER TABLE `his_pharmaceuticals`
    MODIFY `phar_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;
ALTER TABLE `his_pharmaceuticals_categories`
    MODIFY `pharm_cat_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 4;
ALTER TABLE `his_prescriptions`
    MODIFY `pres_id` int(200) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 7;
ALTER TABLE `his_pwdresets`
    MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
ALTER TABLE `his_surgery`
    MODIFY `s_id` int(200) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 5;
ALTER TABLE `his_vendor`
    MODIFY `v_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;
ALTER TABLE `his_vitals`
    MODIFY `vit_id` int(20) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 7;

select * from his_patients;