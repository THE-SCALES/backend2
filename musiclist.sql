-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `musiclist` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `musiclist`;

CREATE TABLE `musiclist` (
  `music` varchar(50) DEFAULT NULL,
  `row` varchar(5) DEFAULT NULL,
  `name` varchar(5) DEFAULT NULL,
  `version` enum('NEW','OLD') DEFAULT NULL,
  `bask` tinyint(2) DEFAULT '1',
  `batv` smallint(4) DEFAULT '1',
  `baco` smallint(4) DEFAULT '1',
  `mesk` tinyint(2) DEFAULT '1',
  `metv` smallint(4) DEFAULT '1',
  `meco` smallint(4) DEFAULT '1',
  `hask` tinyint(2) DEFAULT '1',
  `hatv` smallint(4) DEFAULT '1',
  `haco` smallint(4) DEFAULT '1',
  `whsk` tinyint(2) DEFAULT '1',
  `whtv` smallint(4) DEFAULT '1',
  `whco` smallint(4) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `musiclist` (`music`, `row`, `name`, `version`, `bask`, `batv`, `baco`, `mesk`, `metv`, `meco`, `hask`, `hatv`, `haco`, `whsk`, `whtv`, `whco`) VALUES
('クシコス☆ポスト-青春SKAパンク ミックス！-',	'か',	'くしこ',	'OLD',	16,	880,	140,	34,	1746,	286,	45,	2610,	430,	59,	4128,	678),
('KOROBUSHKA (Ryu☆Remix)',	'か',	'ころぶ',	'OLD',	24,	1458,	253,	46,	2586,	421,	60,	3570,	605,	70,	4341,	801),
('七転八起☆至上主義！',	'さ',	'しちて',	'OLD',	22,	1025,	195,	32,	1711,	326,	44,	2184,	414,	NULL,	NULL,	NULL),
('透明なエモーション',	'た',	'とうめ',	'OLD',	23,	1297,	237,	38,	1852,	307,	49,	2643,	463,	62,	3951,	681),
('FLOWER',	'は',	'ふらわ',	'OLD',	29,	2169,	494,	39,	2661,	601,	69,	4661,	836,	76,	5877,	1197),
('凛として咲く花の如く',	'ら',	'りんと',	'OLD',	22,	1226,	216,	33,	2201,	376,	45,	3047,	562,	57,	4307,	772),
('LEVEL5-judgelight-',	'ら',	'れへる',	'OLD',	19,	938,	148,	32,	1834,	304,	47,	2222,	397,	52,	2498,	438),
('威風堂々 ～チュートリアルより～',	'あ',	'いふう',	'OLD',	3,	540,	110,	23,	1346,	256,	44,	1969,	454,	41,	2454,	559),
('オリオンをなぞる',	'あ',	'おりお',	'OLD',	13,	1003,	178,	31,	1807,	292,	46,	2391,	441,	53,	3107,	557),
('黒髪乱れし修羅となりて',	'か',	'くろか',	'OLD',	23,	1296,	211,	39,	2296,	441,	53,	3640,	615,	71,	5081,	971),
('残酷な天使のテーゼ',	'さ',	'ざんこ',	'OLD',	6,	732,	117,	28,	1326,	211,	39,	1799,	289,	NULL,	NULL,	NULL),
('DRAGON KILLER',	'た',	'とらこ',	'OLD',	28,	1508,	288,	42,	2569,	509,	72,	3652,	737,	76,	4626,	871),
('Hacking to the Gate',	'は',	'はつき',	'OLD',	13,	990,	170,	31,	1708,	293,	45,	2406,	426,	NULL,	NULL,	NULL),
('→unfinished→',	'あ',	'あんふ',	'OLD',	13,	1013,	203,	29,	1320,	250,	45,	2580,	495,	48,	2971,	571),
('嘘',	'あ',	'うそ',	'OLD',	21,	976,	181,	32,	1592,	312,	51,	2653,	543,	NULL,	NULL,	NULL),
('オレンジ',	'あ',	'おれん',	'OLD',	7,	570,	95,	29,	1458,	243,	45,	2122,	382,	NULL,	NULL,	NULL),
('侵略ノススメ☆',	'さ',	'しんり',	'OLD',	19,	1307,	207,	33,	2531,	406,	50,	3971,	651,	51,	2778,	488),
('夏祭り',	'な',	'なつま',	'OLD',	3,	558,	123,	23,	925,	160,	37,	1767,	367,	NULL,	NULL,	NULL),
('Butter-Fly',	'は',	'はたふ',	'OLD',	11,	1068,	218,	28,	1991,	351,	45,	2792,	482,	NULL,	NULL,	NULL),
('アルストロメリア',	'あ',	'あるす',	'OLD',	28,	1569,	299,	42,	2572,	472,	71,	4652,	817,	74,	5024,	929),
('Get Off of My Way',	'か',	'げっと',	'OLD',	10,	842,	172,	37,	2088,	323,	55,	3152,	507,	NULL,	NULL,	NULL),
('黒点',	'か',	'こくて',	'OLD',	29,	1297,	287,	48,	2935,	590,	78,	5420,	1100,	78,	5802,	1057),
('創聖のアクエリオン',	'さ',	'そうせ',	'OLD',	3,	507,	112,	22,	1225,	245,	33,	1936,	401,	38,	2256,	506),
('sister\'s noise',	'さ',	'しすた',	'OLD',	10,	728,	143,	29,	1288,	223,	39,	1985,	345,	46,	2291,	391),
('セツナトリップ',	'さ',	'せつな',	'OLD',	7,	761,	131,	33,	2069,	389,	59,	3856,	736,	61,	4210,	880),
('ラクガキスト',	'ら',	'らくか',	'OLD',	23,	1543,	268,	39,	3086,	506,	62,	4704,	779,	NULL,	NULL,	NULL),
('ルカルカ★ナイトフィーバー',	'ら',	'るかる',	'OLD',	17,	771,	116,	32,	1566,	251,	50,	2571,	431,	NULL,	NULL,	NULL),
('回レ！雪月花',	'ま',	'まわれ',	'OLD',	17,	1032,	177,	32,	1926,	316,	59,	3214,	579,	65,	3454,	629),
('アイネクライネ',	'あ',	'あいね',	'OLD',	11,	865,	165,	37,	1968,	338,	59,	3797,	657,	NULL,	NULL,	NULL),
('天ノ弱',	'あ',	'あまの',	'OLD',	16,	901,	181,	32,	1959,	369,	51,	3262,	592,	NULL,	NULL,	NULL),
('いーあるふぁんくらぶ',	'あ',	'いいあ',	'OLD',	11,	897,	192,	31,	1710,	335,	53,	2943,	563,	53,	3335,	635),
('過食性:アイドル症候群',	'か',	'かしょ',	'OLD',	25,	1814,	309,	39,	2547,	412,	58,	4013,	658,	58,	4303,	713),
('ガラクタネバーランド',	'か',	'がらく',	'OLD',	24,	1472,	302,	39,	2653,	523,	62,	4107,	832,	NULL,	NULL,	NULL),
('カラフル',	'か',	'からふ',	'OLD',	7,	680,	170,	25,	1130,	290,	38,	2023,	473,	44,	2560,	605),
('クノイチでも恋がしたい',	'か',	'くのい',	'OLD',	17,	1198,	243,	33,	2419,	454,	53,	3292,	597,	NULL,	NULL,	NULL),
('紅蓮の弓矢',	'か',	'ぐれん',	'OLD',	9,	636,	101,	28,	1550,	250,	43,	2514,	434,	48,	2870,	505),
('しんでしまうとはなさけない！',	'さ',	'しんで',	'OLD',	21,	1307,	207,	33,	2531,	406,	53,	3971,	651,	NULL,	NULL,	NULL),
('Vitalization',	'は',	'はいた',	'OLD',	22,	1032,	197,	33,	2120,	380,	53,	2994,	589,	58,	3593,	708),
('ハンガリー舞曲 第5番 ～ Hungarian Dances No.5 ～',	'は',	'はんか',	'OLD',	9,	856,	171,	33,	2119,	384,	52,	3754,	699,	NULL,	NULL,	NULL),
('放課後ストライド',	'は',	'ほうか',	'OLD',	17,	1196,	256,	32,	1654,	339,	50,	3888,	703,	55,	4302,	822),
('ラデツキー行進曲 ～ Radetzky March Op. 228 ～',	'ら',	'らてつ',	'OLD',	17,	990,	180,	33,	1821,	331,	54,	3702,	637,	NULL,	NULL,	NULL),
('ロストワンの号哭',	'ら',	'ろすと',	'OLD',	13,	1119,	234,	37,	2205,	390,	58,	4321,	746,	62,	5152,	877),
('EZ DO DANCE',	'あ',	'いいじ',	'OLD',	9,	986,	186,	32,	1538,	263,	51,	3347,	562,	NULL,	NULL,	NULL),
('IGNITE',	'あ',	'いぐな',	'OLD',	15,	1114,	229,	33,	1615,	340,	47,	1963,	468,	54,	2735,	550),
('Scarlet Moon',	'さ',	'すかあ',	'OLD',	17,	989,	209,	32,	1867,	372,	50,	3262,	632,	NULL,	NULL,	NULL),
('Struggle',	'さ',	'すとら',	'OLD',	15,	1123,	228,	36,	2110,	385,	50,	3380,	600,	NULL,	NULL,	NULL),
('竹取飛翔 ～ Lunatic Princess (Ryu☆Remix)',	'た',	'たけと',	'OLD',	22,	1275,	240,	36,	2156,	441,	64,	3996,	766,	NULL,	NULL,	NULL),
('取り残された美術(Arranged:HiZuMi)',	'た',	'とりの',	'OLD',	13,	1165,	205,	28,	1511,	271,	51,	3489,	624,	NULL,	NULL,	NULL),
('NEON WORLD',	'な',	'ねおん',	'OLD',	16,	968,	188,	34,	2602,	467,	63,	4985,	880,	NULL,	NULL,	NULL),
('はなまるぴっぴはよいこだけ',	'は',	'はなま',	'OLD',	15,	931,	191,	28,	1739,	314,	45,	2677,	482,	51,	3067,	527),
('BEAT-NEW-WORLD',	'は',	'ひいと',	'OLD',	23,	1190,	215,	39,	2176,	396,	68,	4968,	868,	NULL,	NULL,	NULL),
('FLAT adding Yuuki Ozaki(from Galileo Galilei)',	'は',	'ふらつ',	'OLD',	13,	979,	214,	33,	1565,	360,	53,	2747,	562,	NULL,	NULL,	NULL),
('炎と森のカーニバル',	'は',	'ほのお',	'OLD',	7,	631,	136,	27,	1419,	314,	42,	1974,	459,	NULL,	NULL,	NULL),
('MURASAKI',	'ま',	'むらさ',	'OLD',	19,	1199,	234,	33,	2086,	411,	53,	3402,	657,	NULL,	NULL,	NULL),
('レット・イット・ゴー～ありのままで～',	'ら',	'れつと',	'OLD',	5,	618,	168,	22,	976,	221,	35,	1663,	363,	39,	1827,	412),
('ウミユリ海底譚',	'あ',	'うみゆ',	'OLD',	13,	962,	152,	33,	1818,	278,	52,	3410,	580,	52,	3448,	588),
('幻想郷の夏祭り',	'か',	'げんそ',	'OLD',	16,	1023,	178,	33,	1978,	348,	53,	3189,	559,	NULL,	NULL,	NULL),
('シュガーソングとビターステップ',	'さ',	'しゅが',	'OLD',	3,	662,	117,	23,	1522,	247,	39,	2407,	392,	43,	3054,	514),
('全力バタンキュー',	'さ',	'ぜんり',	'OLD',	7,	616,	121,	29,	1548,	293,	45,	2363,	443,	NULL,	NULL,	NULL),
('チルノのパーフェクトさんすう教室',	'た',	'ちるの',	'OLD',	13,	1112,	187,	33,	2418,	398,	45,	3471,	621,	52,	4234,	739),
('東京テディベア',	'た',	'とうき',	'OLD',	15,	1387,	242,	33,	2099,	384,	50,	3412,	637,	NULL,	NULL,	NULL),
('ハウトゥー世界征服',	'は',	'はうと',	'OLD',	3,	669,	184,	26,	1838,	438,	43,	3159,	684,	NULL,	NULL,	NULL),
('花',	'は',	'はな',	'OLD',	11,	861,	216,	36,	1843,	363,	61,	3551,	691,	NULL,	NULL,	NULL),
('Piano Ninja',	'は',	'ひあの',	'OLD',	18,	1025,	255,	33,	1715,	365,	52,	2990,	570,	NULL,	NULL,	NULL),
('FUTURE FLIGHT',	'は',	'ひゆう',	'OLD',	9,	858,	163,	30,	2006,	336,	52,	3103,	543,	NULL,	NULL,	NULL),
('無頼ック自己ライザー',	'は',	'ふらい',	'OLD',	22,	1004,	214,	36,	1612,	282,	58,	3221,	556,	58,	3552,	562),
('Help me, ERINNNNNN!! 小林幸子さん ver. 「くーくり博麗お祭りえーりん！」',	'は',	'へるふ',	'OLD',	10,	938,	268,	31,	2020,	495,	53,	3790,	745,	57,	4385,	900),
('私以外私じゃないの',	'わ',	'わたし',	'OLD',	6,	646,	106,	28,	1416,	216,	43,	2227,	347,	NULL,	NULL,	NULL),
('アシタノヒカリ',	'あ',	'あした',	'OLD',	6,	570,	110,	26,	1001,	201,	45,	1982,	372,	NULL,	NULL,	NULL),
('ANTI-HERO',	'あ',	'あんち',	'OLD',	3,	481,	86,	24,	1120,	170,	53,	2691,	441,	NULL,	NULL,	NULL),
('ギミチョコ!!',	'か',	'ぎみち',	'OLD',	22,	1023,	213,	37,	1690,	305,	57,	3750,	635,	NULL,	NULL,	NULL),
('SAKURAスキップ',	'さ',	'さくら',	'OLD',	13,	884,	144,	28,	1434,	249,	43,	3570,	605,	47,	2675,	480),
('ダイバー',	'た',	'だいば',	'OLD',	3,	548,	83,	23,	1102,	187,	38,	2209,	434,	NULL,	NULL,	NULL),
('Now Loading!!!!',	'な',	'なうろ',	'OLD',	17,	862,	157,	31,	1574,	304,	49,	2423,	448,	51,	2589,	479),
('プライド革命',	'は',	'ふらいと',	'OLD',	15,	1146,	246,	31,	1418,	268,	51,	2456,	451,	52,	2730,	540),
('Preserved Roses',	'は',	'ふりさ',	'OLD',	22,	946,	186,	32,	1593,	283,	54,	2743,	563,	61,	3154,	629),
('ふ・れ・ん・ど・し・た・い',	'は',	'ふれん',	'OLD',	10,	734,	124,	28,	1527,	247,	44,	2481,	436,	51,	3062,	532),
('混ぜるな危険',	'ま',	'ませる',	'OLD',	20,	846,	146,	32,	1478,	308,	62,	3396,	681,	NULL,	NULL,	NULL),
('リクライム',	'ら',	'りくら',	'OLD',	7,	655,	125,	29,	1309,	204,	45,	2419,	394,	NULL,	NULL,	NULL),
('オラリオン',	'あ',	'おらり',	'NEW',	7,	610,	160,	30,	1440,	295,	50,	2191,	496,	46,	2159,	509),
('Paradisus-Paradoxum',	'は',	'はらて',	'NEW',	13,	907,	182,	38,	1888,	358,	52,	2698,	558,	62,	3423,	808),
('Agony for Glory',	'あ',	'あごに',	'NEW',	24,	1410,	225,	45,	2655,	530,	76,	4409,	994,	74,	5349,	1179),
('アネモイティエライ',	'あ',	'あねも',	'NEW',	25,	1322,	212,	39,	2378,	398,	71,	4276,	761,	71,	4717,	867),
('Apocalypse',	'あ',	'あぽか',	'NEW',	29,	2168,	423,	41,	2933,	568,	75,	5623,	1053,	76,	5861,	1116),
('風詠之舞～カゼヨミノマイ',	'か',	'かぜよ',	'NEW',	7,	657,	157,	27,	1395,	265,	48,	2917,	502,	48,	2669,	499),
('彼方のリフレシア',	'か',	'かなた',	'NEW',	15,	1183,	288,	29,	2196,	446,	62,	4017,	812,	70,	4504,	849),
('昏き甲鉄のヴェルガ',	'か',	'くらき',	'NEW',	15,	1088,	188,	29,	1568,	258,	52,	2828,	653,	58,	3136,	796),
('黒紅掬い',	'か',	'くろべ',	'NEW',	10,	774,	164,	28,	1474,	269,	43,	2284,	424,	50,	2706,	526),
('Strange Flow',	'さ',	'すとれ',	'NEW',	13,	1003,	198,	27,	1446,	271,	56,	2620,	445,	53,	2863,	813),
('追想ブロカント',	'た',	'ついそ',	'NEW',	13,	1154,	264,	34,	1926,	396,	53,	3133,	613,	62,	3558,	673),
('ディーナ・シーの踊り',	'た',	'でぃい',	'NEW',	17,	933,	163,	36,	1816,	306,	68,	4127,	692,	69,	4515,	825),
('DAWN OF FALCON',	'た',	'とうん',	'NEW',	26,	1673,	268,	45,	2348,	443,	74,	4562,	872,	75,	4765,	870),
('Dragon\'s Tears',	'た',	'とらこ',	'NEW',	22,	897,	162,	36,	1830,	345,	61,	3583,	708,	62,	3641,	796),
('DREAMER',	'た',	'とりい',	'NEW',	13,	918,	163,	34,	2024,	344,	55,	3929,	724,	59,	3952,	677),
('Towards The Horizon',	'た',	'とわあ',	'NEW',	24,	1357,	217,	38,	2152,	457,	76,	5049,	914,	72,	4236,	866),
('Night Clock',	'な',	'ないと',	'NEW',	19,	990,	205,	34,	1998,	368,	50,	3417,	677,	63,	4045,	895),
('know',	'な',	'のう',	'OLD',	10,	818,	153,	29,	1518,	323,	42,	2114,	464,	55,	2981,	706),
('Nostalgic Magica',	'な',	'のすた',	'NEW',	18,	1014,	179,	36,	2308,	393,	59,	3963,	733,	66,	4607,	932),
('【×▽×】FANTASTIC NxxD BABY【×＿×】',	'は',	'ふあん',	'NEW',	18,	880,	170,	37,	2222,	437,	60,	3492,	792,	66,	4056,	966),
('彷徨オルフェウス',	'は',	'ほうこ',	'NEW',	20,	1220,	265,	33,	1707,	327,	59,	3584,	694,	53,	3063,	628),
('BOMBER BOMBER',	'は',	'ほんは',	'NEW',	15,	1144,	184,	35,	2048,	313,	58,	3492,	592,	62,	4507,	872),
('瀦',	'ま',	'みすた',	'NEW',	23,	951,	196,	38,	1861,	381,	65,	3822,	877,	71,	4519,	959),
('勇気のペンダント',	'や',	'ゆうき',	'NEW',	18,	773,	183,	32,	1304,	249,	53,	2633,	508,	61,	3053,	623),
('宵月の歌姫',	'や',	'よいつ',	'NEW',	22,	1139,	1,	32,	1699,	379,	58,	3203,	748,	62,	4363,	883),
('Requiem of Lament',	'ら',	'れくい',	'NEW',	18,	1058,	213,	31,	2024,	359,	68,	3590,	780,	70,	3956,	926),
('Dracophobia',	'た',	'とらこ',	'NEW',	1,	1,	1,	1,	1,	1,	1,	1,	1,	14,	5886,	1206),
('Emblem of the Moon',	'あ',	'えむふ',	'NEW',	27,	1891,	331,	44,	2632,	467,	78,	5376,	986,	78,	5456,	1126),
('Oh My Jam',	'あ',	'おうま',	'NEW',	25,	1379,	239,	42,	2599,	429,	68,	4772,	787,	77,	4943,	918),
('Myth Collapse',	'ま',	'まいす',	'NEW',	27,	1468,	278,	38,	2316,	411,	73,	5113,	903,	69,	4933,	983),
('WHITE BREATH',	'は',	'ほわい',	'OLD',	11,	998,	188,	28,	1386,	256,	45,	2674,	499,	NULL,	NULL,	NULL),
('円環のヴァルキュリア -lopulla tragedia-',	'あ',	'えんか',	'NEW',	27,	1673,	333,	44,	2705,	510,	77,	5117,	987,	76,	5223,	1111);

-- 2016-12-13 21:46:22
