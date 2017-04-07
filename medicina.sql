-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Abr-2017 às 22:45
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicina`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `confSenha` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `email`, `senha`, `confSenha`) VALUES
(1, 'glei bento domingos', 'gleibento@gmail.com', '123456', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `ate_numero` int(6) NOT NULL,
  `ate_tp_consulta` varchar(20) DEFAULT NULL,
  `ate_data` datetime DEFAULT NULL,
  `ate_obs` varchar(300) DEFAULT NULL,
  `ate_receitalocal` varchar(200) DEFAULT NULL,
  `ate_afastamento` varchar(9) DEFAULT NULL,
  `ate_encaminhamento` varchar(35) DEFAULT NULL,
  `ate_diagnostico` varchar(20) DEFAULT NULL,
  `ate_cid` varchar(10) DEFAULT NULL,
  `ate_alta` varchar(1) DEFAULT NULL,
  `ate_dthr_alta` datetime DEFAULT NULL,
  `rec_cod` int(8) DEFAULT NULL,
  `exa_pedido` int(6) DEFAULT NULL,
  `usu_sus` bigint(15) DEFAULT NULL,
  `pro_cpf` bigint(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atendimento`
--

INSERT INTO `atendimento` (`ate_numero`, `ate_tp_consulta`, `ate_data`, `ate_obs`, `ate_receitalocal`, `ate_afastamento`, `ate_encaminhamento`, `ate_diagnostico`, `ate_cid`, `ate_alta`, `ate_dthr_alta`, `rec_cod`, `exa_pedido`, `usu_sus`, `pro_cpf`) VALUES
(1, 'Emergência', '2017-03-10 06:21:52', 'Dor nas costa', 'Solicito Dipirona injetável e observação/retorno após 2 horas', '2 dias', 'Ortopedista', 'Hérnia Discal', 'S33.1', 'S', '2017-03-10 09:35:02', 1, 1, 123456789012345, 12345678902);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `car_cod` int(3) NOT NULL,
  `car_nome` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`car_cod`, `car_nome`) VALUES
(1, 'Diretor'),
(2, 'Vice-Diretor'),
(3, 'Médico'),
(4, 'Enfermerio'),
(5, 'Técnico de Enfermagem'),
(6, 'Auxiliar de Enfermagem'),
(7, 'Assistente Administrativo'),
(8, 'Recepcionista'),
(9, 'Auxiliar de Serviços Gerais'),
(10, 'Cirurgião Dentista'),
(11, 'Assistente Social'),
(12, 'Auxiliar de Consultório Dentário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `convenio`
--

CREATE TABLE `convenio` (
  `conv_cod` int(3) NOT NULL,
  `conv_nome` varchar(20) DEFAULT NULL,
  `conv_descricao` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `convenio`
--

INSERT INTO `convenio` (`conv_cod`, `conv_nome`, `conv_descricao`) VALUES
(1, 'SUS', 'Sistema Unico de Saude'),
(2, 'ALLIANZ', 'Allianz'),
(3, 'AMIL', 'AMIL'),
(4, 'BRADESCO', 'BRADESCO'),
(5, 'GREEN LINE', 'GreenLine Saúde'),
(6, 'IMASF', 'Instituto Municipal de Assistência à Saúde do Funcionalismo'),
(7, 'INTERMEDICA', 'Grupo NOTREDAME INTERMEDICA'),
(8, 'NEXT', 'NEXT'),
(9, 'NOTRE DAME', 'Grupo NOTREDAME INTERMEDICA'),
(10, 'PORTO SEGURO', 'PORTO SEGURO'),
(11, 'SANTA HELENA', 'SANTA HELENA'),
(12, 'SANTAMALIA', 'Grupo NOTREDAME INTERMEDICA'),
(13, 'TRASMONTANO', 'TRASMONTANO'),
(14, 'UNIMED', 'Grupo NOTREDAME INTERMEDICA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `especialidade`
--

CREATE TABLE `especialidade` (
  `esp_cod` int(3) NOT NULL,
  `esp_nome` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `especialidade`
--

INSERT INTO `especialidade` (`esp_cod`, `esp_nome`) VALUES
(1, 'Acunputura'),
(2, 'Alergologia'),
(3, 'Angiologia'),
(4, 'Cardiologia'),
(5, 'Clinica Geral'),
(6, 'Coloproctologia'),
(7, 'Dermatologia'),
(8, 'Endocrinologia'),
(9, 'Fisiatria'),
(10, 'Fisioterapia'),
(11, 'Fonoaudiologia'),
(12, 'Gastroenterologia'),
(13, 'Geriatria'),
(14, 'Ginecologia'),
(15, 'Hematologia'),
(16, 'Homeopatia'),
(17, 'Infectologia'),
(18, 'Nefrologia'),
(19, 'Neurologia'),
(20, 'Nutrição'),
(21, 'Nutrologia'),
(22, 'Odontologia'),
(23, 'Oftalmologia'),
(24, 'Oncologia'),
(25, 'Ortopedia'),
(26, 'Traumatologia'),
(27, 'Otorrinolaringologia'),
(28, 'Pediatria'),
(29, 'Pneumologia'),
(30, 'Psicologia'),
(31, 'Psicopedagogia'),
(32, 'Psiquiatria'),
(33, 'Reumatologia'),
(34, 'Urologia'),
(100, '---------');

-- --------------------------------------------------------

--
-- Estrutura da tabela `exame`
--

CREATE TABLE `exame` (
  `exa_cod` int(6) NOT NULL,
  `exa_nome` varchar(30) DEFAULT NULL,
  `tpexame_cod` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exame`
--

INSERT INTO `exame` (`exa_cod`, `exa_nome`, `tpexame_cod`) VALUES
(1, 'Ácido Úrico', 1),
(2, 'Albumina', 1),
(3, 'ALT (TGP)', 1),
(4, 'Aslo', 1),
(5, 'AST (TGO)', 1),
(6, 'Bilirrubinas (BTF)', 1),
(7, 'Cálcio', 1),
(8, 'CKMB', 1),
(9, 'Cloreto', 1),
(10, 'CPK', 1),
(11, 'Eletroforese de Proteínas', 1),
(12, 'Fator Reumatóide', 1),
(13, 'PCR', 1),
(14, 'Colesterol', 1),
(15, 'Creatinina', 1),
(16, 'Ferro', 1),
(17, 'Fosfatase', 1),
(18, 'Fósforo', 1),
(19, 'Gama GT', 1),
(20, 'Glicose', 1),
(21, 'Magnésio', 1),
(22, 'Potássio (K)', 1),
(23, 'Sódio (Na)', 1),
(24, 'Triglicérides', 1),
(25, 'Uréia', 1),
(26, 'Lítio', 1),
(27, 'Cálcio Iônico', 1),
(28, 'Ferretina', 1),
(29, 'Mucoproteína', 1),
(30, 'Hemograma', 2),
(31, 'Coombs Direto', 2),
(32, 'Eletroforese de Hemoglobina', 2),
(33, 'Eritrograma', 2),
(34, 'Leucograma', 2),
(35, 'Plaquetas', 2),
(36, 'Prova de Falcização', 2),
(37, 'Reticulócitos', 2),
(38, 'Tipagem Sanguínea', 2),
(39, 'VHS', 2),
(40, 'Fibrinogênio', 2),
(41, 'Coagulograma', 2),
(42, 'TTPA', 2),
(43, 'TP/AP', 2),
(44, 'TTGO', 1),
(45, 'Glicemia Pós Prandial', 1),
(46, 'TSH', 3),
(47, 'ATA / ATPO', 3),
(48, 'ATG', 3),
(49, 'BHCG', 3),
(50, 'CEA', 3),
(51, 'FSH', 3),
(52, 'GH', 3),
(53, 'IGE', 3),
(54, 'IGF1', 3),
(55, 'LH', 3),
(56, 'PSA', 3),
(57, 'T4 Livre', 3),
(58, 'Medicina Nuclear', 5),
(59, 'VDRL', 3),
(60, 'Prolactina', 3),
(61, 'Àcido Fólico', 3),
(62, 'Chagas', 3),
(63, 'Coombs Indireto', 3),
(64, 'Estrógeno', 3),
(65, 'Hepatite ABC', 3),
(66, 'HIV', 3),
(67, 'Progesterona', 3),
(68, 'Rubéola', 3),
(69, 'Sífilis', 3),
(70, 'Testosterona', 3),
(71, 'Toxoplasmose', 3),
(72, 'Vitamina B12', 3),
(73, 'Alfa-Feto Proteína', 3),
(74, 'Àcido Valpróico', 3),
(75, 'Anti HBC Total', 3),
(76, 'Anti HBS / HBE', 3),
(77, 'Carbamazepina', 3),
(78, 'Citimegalovírus', 3),
(79, 'Cortisol', 3),
(80, 'Fernobarbital', 3),
(81, 'HBSAG / HBFAG', 3),
(82, 'Insulina', 3),
(83, 'Peptídeo C', 3),
(84, 'Tireoglobulina', 3),
(85, 'Urina I', 4),
(86, 'Urocultura', 4),
(87, 'Proteinúria', 4),
(88, 'Glicosúria', 4),
(89, 'Clearence de Creatinina', 4),
(90, 'Fezes', 4),
(91, 'Cultura de Fezes', 4),
(92, 'Cultura para BK', 3),
(93, 'Radiologia', 5),
(94, 'Tomografia Computadorizada', 5),
(95, 'Ressonância Magnética', 5),
(96, 'Mamografia', 5),
(97, 'Ultrassonografia', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `pro_cpf` varchar(15) NOT NULL,
  `pro_nome` varchar(60) DEFAULT NULL,
  `pro_genero` varchar(15) DEFAULT NULL,
  `car_cod` int(3) DEFAULT NULL,
  `pro_registro` varchar(15) DEFAULT NULL,
  `esp_cod` int(3) DEFAULT NULL,
  `pro_login` varchar(20) DEFAULT NULL,
  `pro_senha` varchar(8) DEFAULT NULL,
  `pro_conf_senha` varchar(8) NOT NULL,
  `conv_cod` int(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`pro_cpf`, `pro_nome`, `pro_genero`, `car_cod`, `pro_registro`, `esp_cod`, `pro_login`, `pro_senha`, `pro_conf_senha`, `conv_cod`) VALUES
('12345678901', 'Marli Santos', 'F', 1, '123', 100, '11111111111', 'senha1', 'senha1', 1),
('12345678902', 'José Alves', 'M', 3, '321', 5, '22222222222', 'senha2', 'senha2', 2),
('12345678903', 'Roseli Almeida', 'F', 9, '456', 22, '33333333333', 'senha3', 'senha3', 3),
('12345678904', 'Carlos Moreira', 'M', 3, '654', 29, '44444444444', 'senha4', 'senha4', 4),
('12345678905', 'Humberto Costa', 'M', 3, '789', 34, '55555555555', 'senha5', 'senha5', 5),
('12345678906', 'Sueli Magalhães', 'F', 4, '987', 100, '66666666666', 'senha6', 'senha6', 6),
('12345678907', 'André Ricardo', 'M', 7, '147', 100, '77777777777', 'senha7', 'senha7', 7),
('12345678908', 'João Henrique', 'M', 6, '741', 100, '88888888888', 'senha8', 'senha8', 8),
('082.532.046-12', 'glei bento domingos', 'Masculino', NULL, NULL, NULL, 'gbd', '123456', '123456', NULL),
('084.802.776-02', 'Gabriela Juventino Fernandes Domingos', 'feminino', NULL, NULL, NULL, 'gabi', '123456', '123456', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `prontuario`
--

CREATE TABLE `prontuario` (
  `cod_prontuario` bigint(20) NOT NULL,
  `usu_sus` bigint(15) DEFAULT NULL,
  `exa_pedido` int(6) DEFAULT NULL,
  `pro_cpf` bigint(11) DEFAULT NULL,
  `ate_numero` int(6) DEFAULT NULL,
  `exa_cod` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prontuario`
--

INSERT INTO `prontuario` (`cod_prontuario`, `usu_sus`, `exa_pedido`, `pro_cpf`, `ate_numero`, `exa_cod`) VALUES
(1, 123456789012345, 1, 12345678902, 1, 1),
(2, 123456789012345, 2, 12345678902, 1, 14),
(3, 123456789012345, 3, 12345678902, 1, 23),
(4, 123456789012345, 4, 12345678902, 1, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE `receita` (
  `rec_cod` int(8) NOT NULL,
  `rec_medicamento` varchar(30) DEFAULT NULL,
  `rec_posologia` varchar(20) DEFAULT NULL,
  `rec_data` date DEFAULT NULL,
  `rec_validade` date DEFAULT NULL,
  `usu_sus` bigint(15) DEFAULT NULL,
  `pro_cpf` bigint(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`rec_cod`, `rec_medicamento`, `rec_posologia`, `rec_data`, `rec_validade`, `usu_sus`, `pro_cpf`) VALUES
(1, 'Nimesulida 100mg', '1cp - 3 x dia', '2017-03-10', '2017-03-16', 123456789012345, 12345678902),
(2, 'Dipirona 500mg/ml', '40gotas', '2017-03-10', '2017-03-16', 123456789012345, 12345678902);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicita_exame`
--

CREATE TABLE `solicita_exame` (
  `exa_pedido` int(6) NOT NULL,
  `exa_data` date DEFAULT NULL,
  `exa_cod` int(6) DEFAULT NULL,
  `usu_sus` bigint(15) DEFAULT NULL,
  `pro_cpf` bigint(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solicita_exame`
--

INSERT INTO `solicita_exame` (`exa_pedido`, `exa_data`, `exa_cod`, `usu_sus`, `pro_cpf`) VALUES
(1, '2017-03-10', 1, 123456789012345, 12345678902),
(2, '2017-03-10', 14, 123456789012345, 12345678902),
(3, '2017-03-10', 23, 123456789012345, 12345678902),
(4, '2017-03-10', 7, 123456789012345, 12345678902);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_exame`
--

CREATE TABLE `tipo_exame` (
  `tpexame_cod` int(3) NOT NULL,
  `tpexame_nome` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_exame`
--

INSERT INTO `tipo_exame` (`tpexame_cod`, `tpexame_nome`) VALUES
(1, 'Bioquimica'),
(2, 'Hematologico'),
(3, 'Sorologia/Hormonal'),
(4, 'Microbiologia'),
(5, 'Imagens');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `usu_sus` bigint(15) NOT NULL,
  `usu_cpf` varchar(16) NOT NULL,
  `usu_nome` varchar(60) NOT NULL,
  `usu_dtnasc` varchar(11) DEFAULT NULL,
  `usu_genero` varchar(20) DEFAULT NULL,
  `usu_tp_sangue` varchar(4) DEFAULT NULL,
  `usu_naturalidade` varchar(60) DEFAULT NULL,
  `usu_nacionalidade` varchar(15) DEFAULT NULL,
  `usu_mae` varchar(60) DEFAULT NULL,
  `usu_pai` varchar(60) DEFAULT NULL,
  `usu_rg` varchar(10) DEFAULT NULL,
  `usu_rg_dtexped` varchar(11) DEFAULT NULL,
  `usu_rg_orgexped` varchar(60) DEFAULT NULL,
  `usu_cep` varchar(10) DEFAULT NULL,
  `usu_tipo_logradouro` varchar(11) DEFAULT NULL,
  `usu_logradouro` varchar(30) DEFAULT NULL,
  `usu_num` varchar(6) DEFAULT NULL,
  `usu_complemento` varchar(25) DEFAULT NULL,
  `usu_bairro` varchar(30) DEFAULT NULL,
  `usu_cidade` varchar(30) DEFAULT NULL,
  `usu_uf` varchar(2) DEFAULT NULL,
  `usu_email` varchar(50) DEFAULT NULL,
  `usu_tel` varchar(14) DEFAULT NULL,
  `usu_cel1` varchar(20) DEFAULT NULL,
  `usu_cel2` varchar(20) DEFAULT NULL,
  `usu_recado` varchar(20) DEFAULT NULL,
  `usu_obs` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usu_sus`, `usu_cpf`, `usu_nome`, `usu_dtnasc`, `usu_genero`, `usu_tp_sangue`, `usu_naturalidade`, `usu_nacionalidade`, `usu_mae`, `usu_pai`, `usu_rg`, `usu_rg_dtexped`, `usu_rg_orgexped`, `usu_cep`, `usu_tipo_logradouro`, `usu_logradouro`, `usu_num`, `usu_complemento`, `usu_bairro`, `usu_cidade`, `usu_uf`, `usu_email`, `usu_tel`, `usu_cel1`, `usu_cel2`, `usu_recado`, `usu_obs`) VALUES
(123456789012342, '48130633817', 'Rafaela Piton', '1998-03-15', 'F', 'A+', 'Sao Bernardo do Campo', 'Brasileiro', 'Angela Maria Freitas Piton', 'Rosenwald Santos Piton', '523409114', '2016-03-28', 'SSP/SP', '9831740', 'Rua', 'Rio Grande', '1298', 'casa 2', 'Parque Rio Grande', 'Sao Bernardo do Campo', 'SP', 'rafaelapiton@hotmail.com', '1143540025', '2147483647', '2147483647', '1141278349', 'ND consta'),
(123456789012343, '43922477836', 'Aline de Souza Silva', '1994-03-25', 'F', 'A+', 'Sao Bernardo do Campo', 'Brasileiro', 'Maria Donizeti de Souza Silva', 'Etevaldo de Souza Silva', '426046687', '2015-06-22', 'SSP/SP', '9667030', 'Rua', 'Gra Bretanha', '406', '', 'Vila Santa Luzia', 'Sao Bernardo do Campo', 'SP', 'aline.ssilva@hotmail.com', '1143613120', '2147483647', '2147483647', '1111112222', 'ND Consta'),
(123456789012344, '31768355827', 'Thais Younes', '2000-11-14', 'F', 'A+', 'Sao Bernardo do Campo', 'Brasileiro', 'Marlene Younes', 'Marcos Roberto de Oliveira', '386133013', '2000-11-14', 'SSP/SP', '9750220', 'Rua', 'Aldino Pinotti', '500', 'Ap31 BL01', 'Centro', 'Sao Bernardo do Campo', 'SP', 'tha.younes@gmail.com', '1143174033', '2147483647', '2147483647', '1111112222', 'ND Consta'),
(123456789012345, '35829830809', 'Luca Simaque Souza', '1998-06-21', 'M', 'A+', 'Sao Bernardo do Campo', 'Brasileiro', 'Debora Simaque Souza', 'Roberto Carlos de Souza', '383978737', '1998-06-21', 'SSP/SP', '9780595', 'Rua', 'Helena Aparecida Secol', '160', 'ap 43 B', 'Nova Petropolis', 'Sao Bernardo do Campo', 'SP', 'luccasimaque@yahoo.com.br', '1141297145', '2147483647', '2147483647', '1122223333', 'ND Consta'),
(123456789012346, '47204688880', 'Ana Clara Marini', '2000-09-17', 'F', 'O+', 'Sao Bernardo do Campo', 'Brasileiro', 'Neusa Cristina Villela', 'Edson Luiz Marini', '00000000', '2000-09-17', 'SSP/SP', '9841210', 'Rua', 'Alfazema', '45', '', 'Jardim Central', 'Sao Bernardo do Campo', 'SP', 'anaclara.marini@hotmail.com', '1143514471', '2147483647', '2147483647', '2147483647', 'ND Consta'),
(123456789012347, '45536971816', 'Larissa Borges Silva', '2000-07-08', 'F', 'O+', 'Sao Bernardo do Campo', 'Brasileiro', 'Edina Maria Borges', 'Toniedson Alves da Silva', '37765176x', '2000-07-08', 'SSP/SP', '9182430', 'Rua', 'Giuseppe Lorenzini', '304', '', 'Jardim Las Vegas', 'Santo Andre', 'SP', 'larissabs304@gmail.com', '1149737796', '2147483647', '2147483647', '2147483647', 'ND Consta'),
(123456789012341, '33484444894', 'Anderson Teixeira Goes', '1982-11-07', 'M', 'A+', 'Sao Bernardo do Campo', 'Brasileiro', 'Maria Aparecida Malaquias Goes', 'Euclides Teixeira Goes', '281539327', '2010-10-13', 'SSP/SP', '9861160', 'Avenida', 'Moinho Fabrini', '592', 'ap 84 bl Inglaterra', 'Jardim Independencia', 'Sao Bernardo do Campo', 'SP', 'and_txg@yahoo.com.br', '1100000000', '2147483647', '2147483647', '2147483647', 'ND Consta'),
(12345678912345, '082.532.046-12', 'glei bento Domingos', '20/07/1987', 'Masculino', 'A+', 'Minas gerais', 'Brasileira', 'Marli Bento Domingos', 'Anelito Margarido Domingos', '16534762', NULL, NULL, '09351-140', 'Parque', 'Rua SÃ£o Domingos', NULL, 'cs', 'Parque das AmÃ©ricas', 'MauÃ¡', 'SP', 'glei-bento@hotmail.com', '(11)3458-3155', '(11) 9 7340-7301', '(11) 9 8771-3657', '11973484146', 'nada costa'),
(123456789012349, '082.532.046-12', 'Daniel Domingos', '04/05/1989', 'Masculino', 'B+', 'Minas gerais', 'Brasileira', 'Marli Bento Domingos', 'Anelito Margarido Domingos', '524532366', NULL, NULL, '09425-000', 'Avenida', 'Avenida Humberto de Campos', NULL, 'cs', 'Bocaina', 'RibeirÃ£o Pires', 'SP', 'danielbruxa@live.com', '(11)4748-3506', '(11) 9 7348-4641', '(11) 9 8554-7892', '11973484146', 'nada consta'),
(2222222145, '082.532.046-12', 'Jose milton', '22/08/1983', 'Masculino', 'AB+', 'Mariana', 'German', 'Marli Bento Domingos', 'Anelito Margarido Domingos', '16534762', '22/05/2003', 'ssp', '09361-140', 'Avenida', 'Rua Masafusa Yokota', '55', 'cs', 'Jardim Camila', 'MauÃ¡', 'SP', 'danielbruxa@live.com', '(11)3458-3155', '(11) 9 8771-3657', '(11) 9 7340-7301', '11973484146', 'nada costa'),
(22222221451235, '082.532.046-12', 'Jose milton', '22/08/1983', 'Masculino', 'AB+', 'Mariana', 'German', 'Marli Bento Domingos', 'Anelito Margarido Domingos', '16534762', '22/05/2003', 'ssp', '09361-140', 'Avenida', 'Rua Masafusa Yokota', '55', 'cs', 'Jardim Camila', 'MauÃ¡', 'SP', 'danielbruxa@live.com', '(11)3458-3155', '(11) 9 8771-3657', '(11) 9 7340-7301', '11973484146', 'nada costa'),
(222222214565489, '082.532.046-12', 'Jose milton', '22/08/1983', 'Masculino', 'AB+', 'Mariana', 'German', 'Marli Bento Domingos', 'Anelito Margarido Domingos', '16534762', '22/05/2003', 'ssp', '09361-140', 'Avenida', 'Rua Masafusa Yokota', '55', 'cs', 'Jardim Camila', 'MauÃ¡', 'SP', 'danielbruxa@live.com', '(11)3458-3155', '(11) 9 8771-3657', '(11) 9 7340-7301', '11973484146', 'nada costa'),
(12345678901, '082.532.046-12', 'Jose dias', '22/22/2222', 'feminino', 'A', 'mineiro', 'Brasileira', 'Marli Bento Domingos', 'Anelito Margarido Domingos', '16534762', '33/33/3333', 'ssp', '35420-000', 'rua', 'manoel santos', '456', 'cs', 'barroca', 'Mariana', 'MG', 'danielbruxa@live.com', '(11)3458-3155', '(11) 1 1111-1111', '(55) 5 5555-5555', '2554566333', 'nada conta'),
(12345678901000, '082.532.046-12', 'Jose dias', '22/22/2222', 'feminino', 'A', 'mineiro', 'Brasileira', 'Marli Bento Domingos', 'Anelito Margarido Domingos', '16534762', '33/33/3333', 'ssp', '35420-000', 'rua', 'manoel santos', '456', 'cs', 'barroca', 'Mariana', 'MG', 'danielbruxa@live.com', '(11)3458-3155', '(11) 1 1111-1111', '(55) 5 5555-5555', '2554566333', 'nada conta'),
(123456789010000, '082.532.046-12', 'Jose dias', '22/22/2222', 'feminino', 'A', 'mineiro', 'Brasileira', 'Marli Bento Domingos', 'Anelito Margarido Domingos', '16534762', '33/33/3333', 'ssp', '35420-000', 'rua', 'manoel santos', '456', 'cs', 'barroca', 'Mariana', 'MG', 'danielbruxa@live.com', '(11)3458-3155', '(11) 1 1111-1111', '(55) 5 5555-5555', '2554566333', 'nada conta'),
(123456789022222, '056.254.521-22', 'Jose dias', '22/22/2222', 'feminino', 'A+', 'Minas gerais', 'German', 'Marli Bento Domingos', 'Anelito Margarido Domingos', '2233221', '36/54/8666', 'ssp', '09351-140', 'Avenida', 'Rua SÃ£o Domingos', '568', 'cs', 'Parque das AmÃ©ricas', 'MauÃ¡', 'SP', 'danielbruxa@live.com', '(11)2033-5655', '(44) 5 46-6666', '(77) 7 7777-7777', '2554566333', 'nada costa'),
(123456789012587, '082.532.046-12', 'João Domingos', '02/02/0202', 'Masculino', 'A+', 'Mariana', 'Brasileira', 'Marli Bento Domingos', 'Anelito Margarido Domingos', '16534762', '33/33/3333', 'ssp', '09351-140', 'Avenida', 'Rua São Domingos', '362', 'cs', 'Parque das Américas', 'Mauá', 'SP', 'danielbruxa@live.com', '(11)1111-1111', '(11) 1 1111-1111', '(11) 1 1111-1111', '11973484146', 'nada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`ate_numero`),
  ADD KEY `rec_cod` (`rec_cod`),
  ADD KEY `exa_pedido` (`exa_pedido`),
  ADD KEY `usu_sus` (`usu_sus`),
  ADD KEY `pro_cpf` (`pro_cpf`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`car_cod`);

--
-- Indexes for table `convenio`
--
ALTER TABLE `convenio`
  ADD PRIMARY KEY (`conv_cod`);

--
-- Indexes for table `especialidade`
--
ALTER TABLE `especialidade`
  ADD PRIMARY KEY (`esp_cod`);

--
-- Indexes for table `exame`
--
ALTER TABLE `exame`
  ADD PRIMARY KEY (`exa_cod`),
  ADD KEY `tpexame_cod` (`tpexame_cod`);

--
-- Indexes for table `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`pro_cpf`),
  ADD KEY `car_cod` (`car_cod`),
  ADD KEY `esp_cod` (`esp_cod`),
  ADD KEY `conv_cod` (`conv_cod`);

--
-- Indexes for table `prontuario`
--
ALTER TABLE `prontuario`
  ADD PRIMARY KEY (`cod_prontuario`),
  ADD KEY `usu_sus` (`usu_sus`),
  ADD KEY `exa_pedido` (`exa_pedido`),
  ADD KEY `pro_cpf` (`pro_cpf`),
  ADD KEY `ate_numero` (`ate_numero`);

--
-- Indexes for table `receita`
--
ALTER TABLE `receita`
  ADD PRIMARY KEY (`rec_cod`),
  ADD KEY `usu_sus` (`usu_sus`),
  ADD KEY `pro_cpf` (`pro_cpf`);

--
-- Indexes for table `solicita_exame`
--
ALTER TABLE `solicita_exame`
  ADD PRIMARY KEY (`exa_pedido`),
  ADD KEY `exa_cod` (`exa_cod`),
  ADD KEY `usu_sus` (`usu_sus`),
  ADD KEY `pro_cpf` (`pro_cpf`);

--
-- Indexes for table `tipo_exame`
--
ALTER TABLE `tipo_exame`
  ADD PRIMARY KEY (`tpexame_cod`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_sus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `ate_numero` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prontuario`
--
ALTER TABLE `prontuario`
  MODIFY `cod_prontuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
