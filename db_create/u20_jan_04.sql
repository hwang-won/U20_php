-- --------------------------------------------------------
-- 호스트:                          127.0.0.1
-- 서버 버전:                        10.4.24-MariaDB - mariadb.org binary distribution
-- 서버 OS:                        Win64
-- HeidiSQL 버전:                  11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- u20_db 데이터베이스 구조 내보내기
CREATE DATABASE IF NOT EXISTS `u20_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `u20_db`;

-- 테이블 u20_db.list_admin 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '관리자 고유넘버',
  `admin_account` varchar(32) NOT NULL COMMENT '관리자 아이디',
  `admin_password` char(64) NOT NULL COMMENT '관리자 비밀번호',
  `admin_name` varchar(32) NOT NULL COMMENT '관리자 이름',
  `admin_level` text NOT NULL DEFAULT 'authSchedulesRead' COMMENT '관리자레벨 권한',
  `admin_datetime` datetime NOT NULL COMMENT '관리자 생성날짜',
  `admin_latest_datetime` datetime DEFAULT NULL COMMENT '관리자 최근접속날짜',
  `admin_latest_ip` varchar(64) DEFAULT NULL COMMENT '관리자 최근접속IP',
  `admin_session` varchar(64) DEFAULT NULL COMMENT '관리자 최근접속세션',
  `admin_password_datetime` datetime DEFAULT NULL COMMENT '관리자 비밀번호 변경일',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_admin:~9 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_admin` DISABLE KEYS */;
INSERT INTO `list_admin` (`admin_id`, `admin_account`, `admin_password`, `admin_name`, `admin_level`, `admin_datetime`, `admin_latest_datetime`, `admin_latest_ip`, `admin_session`, `admin_password_datetime`) VALUES
	(4, 'admin02', '634999f11f6eb3ddff57fffb6b47a0b86a58d73c70c4a56b0e6bc90c512e72da', '관리자2', 'authEntrysCreate,authSchedulesCreate', '2021-08-02 16:00:02', '2021-08-02 16:00:20', '210.178.101.186', 'b68a179ce1a91ce625c0617735e09c64', NULL),
	(5, 'admin1', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '관리자1', 'authEntrysDelete,authSchedulesDelete,authRecordsDelete', '2021-09-29 21:40:52', '2021-09-30 15:41:02', '14.46.34.33', '80269f421465acdcfcc8eca3e41009c3', NULL),
	(6, 'admin2', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '관리자2', 'authEntrysUpdate,authSchedulesUpdate', '2021-09-29 21:41:19', '2021-09-30 15:41:15', '14.46.34.33', '906d026a5695876c42652cb2bd176dec', NULL),
	(8, 'admin4', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '관리자4', '4', '2021-09-29 21:42:03', '2021-09-29 21:58:06', '14.46.40.156', '6f39b2ac928082904f7d5fc58d6b3b35', NULL),
	(9, 'admin5', '1718c24b10aeb8099e3fc44960ab6949ab76a267352459f203ea1036bec382c2', '관리자5', '5', '2021-09-29 21:42:17', '2023-01-04 14:46:36', '::1', '5eb0d0d85aaad0756506ed0f80fc9347', '2023-01-04 10:58:16'),
	(10, 'admin6', '1718c24b10aeb8099e3fc44960ab6949ab76a267352459f203ea1036bec382c2', '관리자6', 'authEntrysRead,authSchedulesRead', '2023-01-02 14:04:53', NULL, NULL, NULL, NULL),
	(11, 'admin7', '1718c24b10aeb8099e3fc44960ab6949ab76a267352459f203ea1036bec382c2', 'sdsad', 'authEntrysRead', '2023-01-02 14:06:23', '2023-01-04 14:32:55', '::1', 'ee687d9b0054217d256098671a9de9a6', NULL),
	(12, 'admin8', '1718c24b10aeb8099e3fc44960ab6949ab76a267352459f203ea1036bec382c2', 'ddd', 'authEntrysRead', '2023-01-02 14:06:51', NULL, NULL, NULL, NULL),
	(13, 'admin01', '1718c24b10aeb8099e3fc44960ab6949ab76a267352459f203ea1036bec382c2', '관리자01', 'authEntrysRead,authSchedulesRead,authRecordsUpdate,authStaticsUpdate', '2023-01-04 11:14:27', NULL, NULL, NULL, NULL);
/*!40000 ALTER TABLE `list_admin` ENABLE KEYS */;

-- 테이블 u20_db.list_athlete 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_athlete` (
  `athlete_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '선수 고유넘버',
  `athlete_name` varchar(64) NOT NULL COMMENT '선수 이름',
  `athlete_country` char(3) NOT NULL COMMENT '선수 국가',
  `athlete_region` varchar(64) NOT NULL COMMENT '선수 지역',
  `athlete_division` varchar(64) NOT NULL COMMENT '선수 소속',
  `athlete_gender` enum('m','f') NOT NULL DEFAULT 'm' COMMENT '선수 성별(m:남성,f:여성)',
  `athlete_birth` date NOT NULL COMMENT '선수 생년월일',
  `athlete_age` tinyint(3) unsigned NOT NULL COMMENT '선수 나이',
  `athlete_profile` varchar(128) NOT NULL COMMENT '선수 프로필사진',
  `athlete_schedule` varchar(128) NOT NULL COMMENT '선수 참가 경기(경기종목 고유번호)',
  PRIMARY KEY (`athlete_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_athlete:~1 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_athlete` DISABLE KEYS */;
INSERT INTO `list_athlete` (`athlete_id`, `athlete_name`, `athlete_country`, `athlete_region`, `athlete_division`, `athlete_gender`, `athlete_birth`, `athlete_age`, `athlete_profile`, `athlete_schedule`) VALUES
	(1, '1', 'KOR', '1', '1', 'm', '2023-01-04', 20, '1', '1');
/*!40000 ALTER TABLE `list_athlete` ENABLE KEYS */;

-- 테이블 u20_db.list_coach 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_coach` (
  `coach_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '코치 고유넘버',
  `coach_name` varchar(64) NOT NULL COMMENT '코치 이름',
  `coach_country_id` int(11) NOT NULL COMMENT '코치 국가',
  `coach_region` varchar(64) NOT NULL COMMENT '코치 지역',
  `coach_division` varchar(64) NOT NULL COMMENT '코치 소속',
  `coach_duty` varchar(64) NOT NULL COMMENT '코치 직무',
  `coach_gender` enum('m','f') NOT NULL DEFAULT 'm' COMMENT '코치 성별(m:남성,f:여성)',
  `coach_birth` date NOT NULL COMMENT '코치 생년월일',
  `coach_age` tinyint(3) unsigned NOT NULL COMMENT '코치 나이',
  `coach_profile` varchar(128) DEFAULT NULL COMMENT '코치 프로필사진',
  `coach_sports_id` varchar(128) NOT NULL COMMENT '코치 참가 경기',
  PRIMARY KEY (`coach_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_coach:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_coach` DISABLE KEYS */;
/*!40000 ALTER TABLE `list_coach` ENABLE KEYS */;

-- 테이블 u20_db.list_country 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '국가 고유아이디',
  `country_code` varchar(4) NOT NULL COMMENT '국가 코드',
  `country_name` varchar(64) NOT NULL COMMENT '국가 이름',
  `country_name_kr` varchar(32) NOT NULL COMMENT '국가 이름(한글)',
  PRIMARY KEY (`country_id`),
  UNIQUE KEY `country_code` (`country_code`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_country:~35 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_country` DISABLE KEYS */;
INSERT INTO `list_country` (`country_id`, `country_code`, `country_name`, `country_name_kr`) VALUES
	(1, 'BGD', 'Bangladesh', '방글라데시'),
	(2, 'KHM', 'Cambodia', '캄보디아'),
	(3, 'CHN', 'China', '중국'),
	(4, 'HKG', 'Hong Kong', '홍콩'),
	(5, 'IDN', 'Indonesia', '인도네시아'),
	(6, 'IND', 'India', '인도'),
	(7, 'IRN', 'Iran', '이란'),
	(8, 'IRQ', 'Iraq', '이라크'),
	(9, 'JOR', 'Jordan', '요르단'),
	(10, 'JPN', 'Japan', '일본'),
	(11, 'KAZ', 'Kazakhstan', '카자흐스탄'),
	(12, 'KGZ', 'Kyrgyzstan', '키르기스스탄'),
	(13, 'KOR', 'Korea', '대한민국'),
	(14, 'SAU', 'Saudi Arabia', '사우디아라비아'),
	(15, 'KWT', 'Kuwait', '쿠웨이트'),
	(16, 'LAO', 'Laos', '라오스'),
	(17, 'LBN', 'Lebanon', '레바논'),
	(18, 'MAC', 'Macau', '마카오'),
	(19, 'MYS', 'Malaysia', '말레이시아'),
	(20, 'MDV', 'Maldive Islands', '몰디브'),
	(21, 'MMR', 'Myanmar', '미얀마'),
	(22, 'OMN', 'Oman', '오만'),
	(23, 'PAK', 'Pakistan', '파키스탄'),
	(24, 'PHL', 'Philippines', '필리핀'),
	(25, 'QAT', 'Qatar', '카타르'),
	(26, 'SGP', 'Singapore', '싱가포르'),
	(27, 'LKA', 'Sri Lanka', '스리랑카'),
	(28, 'SYR', 'Syria', '시리아'),
	(29, 'THA', 'Thailand', '태국'),
	(30, 'TJK', 'Tajikistan', '타지키스탄'),
	(31, 'TKM', 'Turkmenistan', '투르크메니스탄'),
	(32, 'TWN', 'Chinese Taipei', '대만'),
	(33, 'UZB', 'Uzbekistan', '우즈베키스탄'),
	(34, 'VNM', 'Vietnam', '베트남'),
	(35, 'YEM', 'Yemen', '예멘');
/*!40000 ALTER TABLE `list_country` ENABLE KEYS */;

-- 테이블 u20_db.list_director 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_director` (
  `director_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '임원 고유넘버',
  `director_name` varchar(64) NOT NULL COMMENT '임원 이름',
  `director_country` char(3) NOT NULL COMMENT '임원 국가',
  `director_division` varchar(64) NOT NULL COMMENT '임원 소속',
  `director_gender` enum('m','f') NOT NULL DEFAULT 'm' COMMENT '임원 성별(m:남성,f:여성)',
  `director_birth` date NOT NULL COMMENT '임원 생년월일',
  `director_age` tinyint(3) unsigned NOT NULL COMMENT '임원 나이',
  `director_duty` varchar(64) NOT NULL COMMENT '임원 직무',
  `director_schedule` varchar(128) NOT NULL COMMENT '임원 배정 경기(경기종목 고유번호)',
  PRIMARY KEY (`director_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_director:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_director` DISABLE KEYS */;
/*!40000 ALTER TABLE `list_director` ENABLE KEYS */;

-- 테이블 u20_db.list_judge 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_judge` (
  `judge_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '심판 고유넘버',
  `judge_name` varchar(64) NOT NULL COMMENT '심판 이름',
  `judge_country` char(3) NOT NULL COMMENT '심판 국가',
  `judge_division` varchar(64) NOT NULL COMMENT '심판 소속',
  `judge_gender` enum('m','f') NOT NULL DEFAULT 'm' COMMENT '심판 성별(m:남성,f:여성)',
  `judge_birth` date NOT NULL COMMENT '심판 생년월일',
  `judge_age` tinyint(3) unsigned NOT NULL COMMENT '심판 나이',
  `judge_duty` varchar(64) NOT NULL COMMENT '심판 직무',
  `judge_schedule` varchar(128) NOT NULL COMMENT '심판 배정 경기(경기종목 고유번호)',
  `judge_account` varchar(32) DEFAULT NULL COMMENT '심판 아이디',
  `judge_password` char(64) DEFAULT NULL COMMENT '심판 비밀번호',
  `judge_latest_datetime` datetime DEFAULT NULL COMMENT '심판 최근접속날짜',
  `judge_latest_ip` varchar(64) DEFAULT NULL COMMENT '심판 최근접속IP',
  `judge_latest_session` varchar(64) DEFAULT NULL COMMENT '심판 최근접속세션',
  `judge_password_datetime` datetime DEFAULT NULL COMMENT '심판 비밀번호변경일',
  `judge_level` text DEFAULT 'authSchedulesRead' COMMENT '심판 레벨 권한',
  PRIMARY KEY (`judge_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_judge:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_judge` DISABLE KEYS */;
/*!40000 ALTER TABLE `list_judge` ENABLE KEYS */;

-- 테이블 u20_db.list_log 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_log` (
  `log_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '로그 고유넘버',
  `log_account` varchar(32) NOT NULL COMMENT '로그 아이디(관리자/심판)',
  `log_name` varchar(32) NOT NULL COMMENT '로그 이름(관리자/심판)',
  `log_ip` varchar(32) NOT NULL COMMENT '로그 IP(관리자/심판)',
  `log_division` enum('a','j') NOT NULL DEFAULT 'a' COMMENT '로그 구분(a:관리자, j:심판)',
  `log_activity` varchar(128) NOT NULL COMMENT '로그 활동내역',
  `log_sub_activity` varchar(256) DEFAULT NULL COMMENT '로그 세부 활동내역',
  `log_datetime` datetime NOT NULL COMMENT '로그 사용시간',
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_log:~15 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_log` DISABLE KEYS */;
INSERT INTO `list_log` (`log_id`, `log_account`, `log_name`, `log_ip`, `log_division`, `log_activity`, `log_sub_activity`, `log_datetime`) VALUES
	(1, 'admin5', '관리자5', '199.111.111.111', 'a', '기록 삭제', 'admin4', '2023-01-04 10:28:24'),
	(2, 'admin4', '관리자4', '199.100.100.100', 'a', '국가 수정', 'KOR', '2023-01-04 10:38:59'),
	(3, 'admin5', '관리자5', '::1', 'a', '로그인', NULL, '2023-01-04 11:11:09'),
	(4, 'admin5', '관리자5', '::1', 'a', '로그인', '', '2023-01-04 14:08:57'),
	(5, 'admin5', '관리자5', '::1', 'a', '로그인', '', '2023-01-04 14:09:53'),
	(6, 'admin5', '관리자5', '::1', 'a', '로그인', '', '2023-01-04 14:12:10'),
	(7, 'admin5', '관리자5', '::1', 'a', '계정 생성', 'admin00', '2023-01-04 14:17:33'),
	(12, 'admin5', '관리자5', '::1', 'a', '계정 권한 수정', 'admin02', '2023-01-04 14:28:52'),
	(13, 'admin5', '관리자5', '::1', 'a', '계정 권한 수정', 'admin02', '2023-01-04 14:28:59'),
	(14, 'admin5', '관리자5', '::1', 'a', '로그아웃', '', '2023-01-04 14:31:04'),
	(15, 'admin7', 'sdsad', '::1', 'a', '로그인', '', '2023-01-04 14:32:55'),
	(16, 'admin7', 'sdsad', '::1', 'a', '로그아웃', '', '2023-01-04 14:45:38'),
	(17, 'admin5', '관리자5', '::1', 'a', '로그인', '', '2023-01-04 14:45:56'),
	(18, 'admin5', '관리자5', '::1', 'a', '로그아웃', '', '2023-01-04 14:45:57'),
	(19, 'admin5', '관리자5', '::1', 'a', '로그인', '', '2023-01-04 14:46:36');
/*!40000 ALTER TABLE `list_log` ENABLE KEYS */;

-- 테이블 u20_db.list_record 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_record` (
  `record_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '성적 고유넘버',
  `record_athlete_id` smallint(5) unsigned NOT NULL COMMENT '선수 고유넘버',
  `record_schedule_id` smallint(5) unsigned NOT NULL COMMENT '경기 고유넘버',
  `record_pass` enum('p','l','d','w','n') NOT NULL DEFAULT 'n' COMMENT '경기 통과(p:통과, l:탈락, d:실격, w:기권, n:시작안함)',
  `record_result` tinyint(3) unsigned NOT NULL COMMENT '경기 결과등수',
  `record_record` varchar(32) NOT NULL COMMENT '경기 성적',
  `record_new` enum('n','y') NOT NULL DEFAULT 'n' COMMENT '경기 신기록여부(n:아님, y:신기록)',
  `record_memo` varchar(64) NOT NULL COMMENT '경기 비고',
  `record_medal` smallint(5) unsigned NOT NULL COMMENT '경기 메달(10000-금, 100-은, 1-동, 0-없음)',
  `record_order` tinyint(3) unsigned NOT NULL COMMENT '선수 리스팅순서',
  `record_judge` smallint(5) unsigned NOT NULL COMMENT '성적을 작성한 심판 고유넘버',
  `record_trial` tinyint(4) DEFAULT NULL COMMENT '경기 시도 횟수',
  `record_wind` float DEFAULT NULL COMMENT '경기 풍향',
  `record_weight` float unsigned DEFAULT NULL COMMENT '경기 필드 경기 무게',
  PRIMARY KEY (`record_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_record:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_record` DISABLE KEYS */;
/*!40000 ALTER TABLE `list_record` ENABLE KEYS */;

-- 테이블 u20_db.list_schedule 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_schedule` (
  `schedule_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '경기 고유넘버',
  `schedule_sports` varchar(32) NOT NULL COMMENT '경기 종목',
  `schedule_name` varchar(64) NOT NULL COMMENT '경기 이름',
  `schedule_gender` enum('m','f','c') NOT NULL DEFAULT 'm' COMMENT '경기 성별(m:남성,f:여성,c:혼성)',
  `schedule_round` varchar(32) NOT NULL COMMENT '경기 라운드',
  `schedule_location` varchar(64) NOT NULL COMMENT '경기 장소',
  `schedule_start` datetime NOT NULL COMMENT '경기 시작시간',
  `schedule_finish` datetime NOT NULL COMMENT '경기 마감시간',
  `schedule_status` enum('n','c','o','y') NOT NULL DEFAULT 'n' COMMENT '경기 상태(n:준비, c:취소됨, o:경기중, y:마감)',
  `schedule_date` datetime NOT NULL COMMENT '경기 날짜',
  PRIMARY KEY (`schedule_id`),
  UNIQUE KEY `schedule_sports` (`schedule_sports`,`schedule_name`,`schedule_gender`,`schedule_round`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_schedule:~2 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_schedule` DISABLE KEYS */;
INSERT INTO `list_schedule` (`schedule_id`, `schedule_sports`, `schedule_name`, `schedule_gender`, `schedule_round`, `schedule_location`, `schedule_start`, `schedule_finish`, `schedule_status`, `schedule_date`) VALUES
	(1, '1', '1', 'm', '32', '1', '2023-01-03 09:19:03', '2023-01-03 09:19:04', 'n', '2023-01-03 09:19:09'),
	(2, '1', '1', 'm', '64', '1', '2023-01-03 09:19:20', '2023-01-03 09:19:21', 'n', '2023-01-03 09:19:22');
/*!40000 ALTER TABLE `list_schedule` ENABLE KEYS */;

-- 테이블 u20_db.list_sports 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_sports` (
  `sports_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '경기종목 고유번호',
  `sports_code` varchar(64) NOT NULL COMMENT '경기종목 코드',
  `sports_name` varchar(64) NOT NULL COMMENT '경기종목 이름',
  `sports_name_kr` varchar(64) NOT NULL COMMENT '경기종목 이름(한글)',
  PRIMARY KEY (`sports_id`),
  UNIQUE KEY `sports_code` (`sports_code`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_sports:~25 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_sports` DISABLE KEYS */;
INSERT INTO `list_sports` (`sports_id`, `sports_code`, `sports_name`, `sports_name_kr`) VALUES
	(1, '100m', '100m', '100m'),
	(2, '200m', '200m', '200m'),
	(3, '400m', '400m', '400m'),
	(4, '800m', '800m', '800m'),
	(5, '1500m', '1500m', '1500m'),
	(6, '3000m', '3000m', '3000m'),
	(7, '5000m', '5000m', '5000m'),
	(8, '10000m', '10000m', '10000m'),
	(9, '3000mSC', '3000m Steeplechase', '3000m 장애물'),
	(10, '100mh', '100m Hurdles', '100m 허들'),
	(11, '110mh', '110m Hurdles', '110m 허들'),
	(12, '400mh', '400m Hurdles', '400m 허들'),
	(13, 'highjump', 'High Jump', '높이뛰기'),
	(14, 'polevault', 'Pole Vault', '장대 높이뛰기'),
	(15, 'longjump', 'Long Jump', '멀리뛰기'),
	(16, 'triplejump', 'Triple Jump', '세단뛰기'),
	(17, 'shotput', 'Shot Put', '투포환'),
	(18, 'discusthrow', 'Discus Throw', '원반던지기'),
	(19, 'hammerthrow', 'Hammer Throw', '해머던지기'),
	(20, 'javelinthrow', 'Javelin Throw', '창던지기'),
	(21, 'heptathlon', 'Heptathlon', '7종경기(여)'),
	(22, 'decathlon', 'Decathlon', '10종경기(남)'),
	(23, 'racewalk', 'Race Walk', '경보'),
	(24, '4x100relay', '4x100 Relay', '4x100 릴레이'),
	(25, '4x400relay', '4x400 Relay', '4x400 릴레이');
/*!40000 ALTER TABLE `list_sports` ENABLE KEYS */;

-- 테이블 u20_db.list_worldrecord 구조 내보내기
CREATE TABLE IF NOT EXISTS `list_worldrecord` (
  `worldrecord_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '세계기록 고유번호',
  `worldrecord_sports_id` smallint(5) unsigned NOT NULL COMMENT '경기종목 고유번호',
  `worldrecord_name` varchar(64) NOT NULL COMMENT '세계기록 선수명',
  `worldrecord_gender` enum('m','f') NOT NULL DEFAULT 'm' COMMENT '선수 성별(m:남성, f:여성)',
  `worldrecord_record` varchar(32) NOT NULL COMMENT '경기 성적',
  `worldrecord_athletics` enum('k','a','w') NOT NULL COMMENT '기록(k:한국, a:아시아, w:세계기록)',
  `worldrecord_wind` double unsigned NOT NULL COMMENT '풍향',
  `worldrecord_datetime` datetime NOT NULL COMMENT '기록 날짜',
  PRIMARY KEY (`worldrecord_id`),
  UNIQUE KEY `worldrecord_sports_id` (`worldrecord_sports_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 테이블 데이터 u20_db.list_worldrecord:~0 rows (대략적) 내보내기
/*!40000 ALTER TABLE `list_worldrecord` DISABLE KEYS */;
/*!40000 ALTER TABLE `list_worldrecord` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
