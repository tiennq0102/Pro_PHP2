/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100422
 Source Host           : localhost:3306
 Source Schema         : php2_asm1

 Target Server Type    : MySQL
 Target Server Version : 100422
 File Encoding         : 65001

 Date: 04/03/2022 21:07:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `question_id` int NULL DEFAULT NULL,
  `is_correct` int NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 154 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES (1, 'Astrid - siêu sao bóng chày', 38, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (4, NULL, NULL, NULL, '', NULL, NULL);
INSERT INTO `answers` VALUES (5, 'Astrid - tuyển thủ bóng chày', 38, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (6, 'Astrid - thủy thủ', 38, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (7, 'Astrid - tiểu long', 38, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (8, 'Butterfly', 39, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (9, 'Astrid', 39, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (10, 'Qi', 39, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (11, 'Triệu Vân', 39, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (12, 'Đao truy hồn', 40, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (13, 'Huyết giáp', 40, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (14, 'Áo choàng thần RA', 40, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (15, 'Giáp hộ mệnh', 40, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (16, 'Đế chế ', 41, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (17, 'Arena Of Valor (Liên quân)', 41, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (18, 'Đột kích', 41, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (19, 'Beach head 2000', 41, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (20, 'Nam Blue', 42, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (21, 'Tiền Zombie V4', 42, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (22, 'Chim sẻ đi nắng', 42, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (23, 'Boman', NULL, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (24, 'Boman', NULL, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (25, 'Boman', 42, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (26, 'MK4', 43, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (27, 'Beach head 2000', 43, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (28, 'Arena Of Valor (Liên quân)', 43, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (29, 'Among us', 43, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (30, 'Bắn Chim', 44, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (31, 'Bắn Gà', 44, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (32, 'Bắn máy bay', 44, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (33, 'Bắn súng bùm bùm', 44, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (34, 'Đào vàng', 45, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (35, 'Gold Rush', 45, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (36, 'Bắn máy bay', 45, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (37, 'Đào vàng', 45, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (38, 'Triệu Vân', 63, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (39, 'Wiro', 63, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (40, 'Paine', 63, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (41, 'Violet', 63, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (42, 'One Punch Man', 66, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (43, 'Doraemon', 66, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (44, 'Dragon Ball', 66, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (45, 'Conan', 66, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (46, 'Joker', 67, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (47, 'Batman', 67, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (48, 'Superman', 67, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (49, 'Paine', 67, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (50, 'Đấu sĩ', 68, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (51, 'Xạ thủ', 68, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (52, 'Đỡ đòn', 68, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (53, 'Sát thủ', 68, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (54, 'Astrid - siêu sao bóng chày', 69, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (55, 'Astrid - tuyển thủ bóng chày', 69, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (56, 'Astrid - tiểu long', 69, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (57, 'Astrid - thủy thủ', 69, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (58, 'Athur', 70, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (59, 'Mortos', 70, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (60, 'Chúa tể xương', 70, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (61, 'Gildur', 70, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (62, 'Kil\'groth', 71, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (63, 'Lumburr', 71, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (64, 'Omega', 71, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (65, 'Athur', 71, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (68, '1', 72, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (69, '2', 72, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (70, '3', 72, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (71, '4', 72, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (72, 'Đột kích', 73, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (73, 'Đào vàng', 73, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (74, 'Contra', 73, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (75, 'Alien shooter', 73, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (76, 'AK 47', 74, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (77, 'AWM', 74, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (78, 'LR4 Đặc chủng', 74, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (79, 'Barrett M107', 74, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (80, 'Pikachi', 75, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (81, 'Pikachy', 75, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (82, 'Pikachu', 75, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (83, 'Pokemon', 75, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (84, 'Msuong', 76, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (85, 'Xuân Bách', 76, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (86, 'Chim sẻ đi nắng', 76, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (87, 'Độ Mixi', 76, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (88, 'Cuộc chiến các bộ lạc', 77, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (89, 'Cuộc chiến xuyên thế kỷ', 77, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (90, 'Xâm lược', 77, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (91, 'Chiếm đảo', 77, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (92, 'Củ khoai tây', 78, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (93, 'Hòn đá', 78, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (94, 'Quả óc chó', 78, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (95, '1 đáp án khác', 78, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (96, 'Run Run', 79, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (97, 'Temple Run', 79, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (98, 'Running man', 79, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (99, 'Subway surfers', 79, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (100, 'Super Saiyan Blue', 47, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (101, 'Super Saiyan 4', 47, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (102, 'Super Saiyan Red', 47, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (103, 'Super Saiyan God', 47, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (104, 'Ông tổ Saiyan', 48, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (105, 'Ác nhân Saiyan Kanba', 48, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (106, 'Broly', 48, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (107, 'Songoku', 48, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (108, 'Thần hủy diệt Beerus', 50, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (109, 'Thần hủy diệt Champa', 50, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (110, 'Zeno ', 50, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (111, 'Broly', 50, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (112, 'Super Saiyan 4', 80, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (113, 'Super Saiyan God', 80, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (114, 'Super Saiyan Blue', 80, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (115, 'Ultra Instinct', 80, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (116, 'Trái đất', 81, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (117, 'Hành tinh Vegeta', 81, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (118, 'Hành tinh Namek', 81, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (119, 'Hành tinh thực vật', 81, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (120, 'Hành tinh Vegeta', 82, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (121, 'Hành tinh Namek', 82, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (122, 'Trái đất', 82, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (123, 'Tên 1 hành tinh khác', 82, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (124, 'Rồng thần của Trái đất', 83, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (125, 'Rồng thần của hành tinh Namek', 83, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (126, 'Rồng thần của hành tinh Vegeta', 83, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (127, 'Rồng thiêng của các Thần vũ trụ', 83, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (128, 'Toni Cipriani', 46, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (129, 'Mike', 46, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (130, 'Tommy Vercetti', 46, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (131, 'Carl Johnson', 46, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (132, 'Songoku', 84, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (133, 'Krilin', 84, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (134, 'Quy lão tiên sinh', 84, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (135, 'Son Gohan', 84, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (136, 'Songoku', 85, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (137, 'Picolo', 85, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (138, 'Vegeta', 85, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (139, 'Chichi', 85, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (140, 'Songoku', 86, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (141, 'Quy lão tiên sinh', 86, 1, '', NULL, NULL);
INSERT INTO `answers` VALUES (142, 'Thượng đế', 86, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (143, 'Vegeta', 86, 0, '', NULL, NULL);
INSERT INTO `answers` VALUES (148, 'jjjj', NULL, 0, '8.jpg', NULL, NULL);
INSERT INTO `answers` VALUES (149, 'jjj', NULL, 99, '', NULL, NULL);
INSERT INTO `answers` VALUES (150, 'jjj', NULL, 88, '', NULL, NULL);
INSERT INTO `answers` VALUES (151, 'jj', NULL, 88, '', NULL, NULL);

-- ----------------------------
-- Table structure for questions
-- ----------------------------
DROP TABLE IF EXISTS `questions`;
CREATE TABLE `questions`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `quiz_id` int NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `img`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 96 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of questions
-- ----------------------------
INSERT INTO `questions` VALUES (39, 'Tên vị tướng trong hình là gì? ', 1, '100ce7ce0785790eb962063f680d0ed1.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (40, 'Bạn là 1 gamer AOV kì cựu? Bạn biết tên của trang bị này không?', 1, 'item-lqm005.png', NULL, NULL);
INSERT INTO `questions` VALUES (41, 'Tên của tựa game trong hình là gì?', 2, 'beach-head-2002-1.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (42, 'Nhân vật trong ảnh là ai?', 2, 'photo-1-1610482068081104320080.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (43, 'Hình ảnh trên gợi nhớ cho bạn về con game nào ?', 2, 'Game-Mortal-Kombat-4.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (44, 'Đây là game gì?', 2, 'hoi-tuong-chuong-trinh-may-tinh-tung-la-huyen-thoai-mot-thoi-cua-dan-8x-dau-9x-9.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (46, 'Bạn đã chơi con game này, vậy bạn nhớ tên của nhân vật này không ?', 2, 'TommyVercetti-GTAVCDE.png', NULL, NULL);
INSERT INTO `questions` VALUES (47, 'Tên đúng cho trạng thái Super Saiyan của Goku', 4, 'Super Saiyan God.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (48, 'Các bạn biết đây là ai không ?', 4, 'dragon-ball-super-broly-160838163249138411011.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (50, 'Tên đang ăn mỳ này là ai ?', 4, 'beerus.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (51, 'Tên trọc này là ai và thuộc bộ phim nào ?', 5, 'saitama.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (52, 'Tên của ông già này là gì?', 5, 'Bang-nanh-bac-1.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (53, 'Đây là ai?', 5, 'Garou.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (55, 'Đây là nhân vật trong bộ phim nào?', 5, 'hinh-anh-yugioh-dep-nhat_024117262.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (56, 'Hình ảnh này thuộc bộ phim nào?', 5, 'One-Piece-tập-cuối-Luffy-trở-thành-vua-hải-tặc-600x360.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (57, 'Đây là ca sĩ nào ?', 27, 'bui-anh-tuan-cover-love-song-tang-sinh-nhat-thay-ho-ngoc-ha.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (58, 'Ông được mệnh danh là Ca sĩ có tông nam cao nhất nhạc Việt', 27, 'bang-kieu-la-ai.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (59, 'Diva này là ai?', 27, 'My-Linh-Diva.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (60, 'Mv ca nhạc nào của Việt Nam nhiều view nhất?', 28, '', NULL, NULL);
INSERT INTO `questions` VALUES (61, 'Hình ảnh này nằm trong mv nào', 28, 'avatasontungmvct.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (63, 'Vị tướng nào trong liên quân không có skin', 1, '', NULL, NULL);
INSERT INTO `questions` VALUES (66, 'skin trong hình đánh dấu sự hợp tác của liên quân với bộ anime nào?', 1, 'raz2.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (67, 'Vị tướng nào dưới đây không phải tướng DC Comics', 1, '', NULL, NULL);
INSERT INTO `questions` VALUES (68, 'Vị tướng trong hình thuộc vai trò nào?', 1, 'paine.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (69, 'Skin dưới đây của vị tướng Astrid tên là gì', 1, 'huong-dan-choi-len-do-Astrid-mua-8-.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (70, 'Tên cũ của vị tướng trong hình là gì?', 1, 'Arthur.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (71, 'đây là ngoại hình cũ của vị tướng nào', 1, 'athur11.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (72, 'Trong AOV, có bao nhiêu vị tướng thời Tam quốc?', 1, '', NULL, NULL);
INSERT INTO `questions` VALUES (73, 'Tên game trong hình là gì?', 2, 'contra.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (74, 'Là 1 gamer, chắc chắn bạn biết tên khẩu súng này.', 2, 'awm.png', NULL, NULL);
INSERT INTO `questions` VALUES (76, 'Đây là ai?', 2, 'mixi.png', NULL, NULL);
INSERT INTO `questions` VALUES (78, 'Trong plants vs zombies, đây là loại thực vật nào?', 2, 'hat.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (79, 'Logo này là của game nào', 2, 'f4b3ac7fe25cad9bc028b33f7a407f28.png', NULL, NULL);
INSERT INTO `questions` VALUES (80, 'Đây là trạng thái Saiyan nào của Goku?', 4, 'Ultra instinct.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (81, 'Trong Dragon Ball, đây là người của hành tinh nào?', 4, 'namek.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (82, 'Trong Dragon Ball, người của hành tinh nào có khả năng tái sinh?', 4, '', NULL, NULL);
INSERT INTO `questions` VALUES (83, 'Rồng thần trong hình thuộc về hành tinh nào?', 4, 'dragon.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (84, 'Nhân vật trong hình là ai?', 4, 'krilin.jpg', NULL, NULL);
INSERT INTO `questions` VALUES (85, 'Người thầy đầu tiên của Son Gohan là ai?', 4, '', NULL, NULL);
INSERT INTO `questions` VALUES (86, 'Người khai sinh ra tuyệt chiêu Kamehameha trong Dragon Ball là ai?', 4, '', NULL, NULL);

-- ----------------------------
-- Table structure for quizs
-- ----------------------------
DROP TABLE IF EXISTS `quizs`;
CREATE TABLE `quizs`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `subject_id` int NULL DEFAULT NULL,
  `duration_minutes` int NULL DEFAULT NULL,
  `start_time` datetime NULL DEFAULT NULL,
  `end_time` datetime NULL DEFAULT NULL,
  `status` int NULL DEFAULT NULL,
  `is_shuffle` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 64 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of quizs
-- ----------------------------
INSERT INTO `quizs` VALUES (1, 'Quiz 1.1', 1, 15, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `quizs` VALUES (2, 'Quiz 1.2', 1, 15, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `quizs` VALUES (4, 'Quiz 2.1', 2, 15, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `quizs` VALUES (5, 'Quiz 2.2', 2, 15, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `quizs` VALUES (27, 'Quiz 3.1', 3, 15, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `quizs` VALUES (28, 'Quiz 3.2', 3, 15, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `quizs` VALUES (30, 'Quiz 4.1', 4, 20, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `quizs` VALUES (31, 'Quiz 4.2', 4, 20, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `quizs` VALUES (33, 'Quiz 1.3', 1, 15, '2022-02-13 07:00:00', '2022-02-14 10:00:00', NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES (1, 'Giáo viên', NULL, NULL);
INSERT INTO `roles` VALUES (2, 'Sinh viên', NULL, NULL);

-- ----------------------------
-- Table structure for student_quiz_detail
-- ----------------------------
DROP TABLE IF EXISTS `student_quiz_detail`;
CREATE TABLE `student_quiz_detail`  (
  `student_quiz_id` int NOT NULL,
  `answer_id` int NOT NULL,
  `question_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`student_quiz_id`, `answer_id`, `question_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student_quiz_detail
-- ----------------------------

-- ----------------------------
-- Table structure for student_quizs
-- ----------------------------
DROP TABLE IF EXISTS `student_quizs`;
CREATE TABLE `student_quizs`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int NULL DEFAULT NULL,
  `quiz_id` int NULL DEFAULT NULL,
  `start_time` datetime NULL DEFAULT NULL,
  `end_time` datetime NULL DEFAULT NULL,
  `score` decimal(4, 2) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 23 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of student_quizs
-- ----------------------------
INSERT INTO `student_quizs` VALUES (11, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10.00, NULL, NULL);
INSERT INTO `student_quizs` VALUES (12, 7, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9.00, NULL, NULL);
INSERT INTO `student_quizs` VALUES (13, 7, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9.00, NULL, NULL);
INSERT INTO `student_quizs` VALUES (21, 21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10.00, NULL, NULL);
INSERT INTO `student_quizs` VALUES (22, 7, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10.00, NULL, NULL);

-- ----------------------------
-- Table structure for subjects
-- ----------------------------
DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `author_id` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of subjects
-- ----------------------------
INSERT INTO `subjects` VALUES (1, 'Game', 1, NULL, NULL);
INSERT INTO `subjects` VALUES (2, 'Anime', NULL, NULL, NULL);
INSERT INTO `subjects` VALUES (3, 'Art', NULL, NULL, NULL);
INSERT INTO `subjects` VALUES (4, 'Cars', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `role_id` int NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'Tiến', 'tiennqph17903@fpt.edu.vn', '$2y$10$x1I1UUYEdka0phvp65jR6erfNyrQ2CJFL5N6VkeS3y8peEjmdqfde', NULL, 1, NULL, NULL);
INSERT INTO `users` VALUES (7, 'Dũng', 'dungldph17915@fpt.edu.vn', '$2y$10$5nKVdpx/aD8.tAb1AC3VDubmxerREYmeRVFXfOs39f/STeTgpPmAa', NULL, 2, NULL, NULL);
INSERT INTO `users` VALUES (10, 'Việt Dũng', 'dungnvph17931@fpt.edu.vn', '$2y$10$dz1rEqwSizyxFqCTZb5oTuEvx44V3q0K6VtgCZdNu252HTd2a4G/6', NULL, 2, NULL, NULL);
INSERT INTO `users` VALUES (19, 'tiến tiến', 'lunbatbai6@gmail.com', '$2y$10$laiVXpSnNLlF60JZvycwfuo0KTpzVjP4nMllxF3hn8f6BpU1oKjVm', NULL, 2, NULL, NULL);
INSERT INTO `users` VALUES (20, 'adidasstore-01', 'tien1234@gmail.com', '$2y$10$7Fv6n.lFwKi6zF68/goDy.BaTXQpVXoMSAFpTSIhdZntGg8SwXM6G', NULL, 2, NULL, NULL);
INSERT INTO `users` VALUES (21, 'Thành Long', 'Longdeptrai@gmail.com', '$2y$10$WdDaVJUT26ySroYRmQm/OOoxM.VhfXfTTKD5eUS1DSjniKILNC0yu', NULL, 2, NULL, NULL);

SET FOREIGN_KEY_CHECKS = 1;
