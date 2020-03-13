USE [ETRADE]
GO
/****** Object:  Table [dbo].[QCategorie]    Script Date: 12/03/2020 21:09:53 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[QCategorie](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[Libelle] [nvarchar](255) NULL,
 CONSTRAINT [PK_QCategorie] PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[QCompangne]    Script Date: 12/03/2020 21:09:53 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[QCompangne](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[Libelle] [nvarchar](255) NULL,
	[Description] [nvarchar](max) NULL,
	[Debut] [datetime] NULL,
	[Fin] [datetime] NULL,
 CONSTRAINT [PK_QCompangne] PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[QProposition]    Script Date: 12/03/2020 21:09:53 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[QProposition](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[Libelle] [nvarchar](max) NULL,
	[Question] [int] NULL,
 CONSTRAINT [PK_QProposition] PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[QQuestion]    Script Date: 12/03/2020 21:09:53 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[QQuestion](
	[Id] [int] NOT NULL,
	[Libelle] [nvarchar](max) NULL,
	[Numero] [int] NULL,
	[Categorie] [int] NULL,
	[Compagne] [int] NULL,
	[Type] [int] NULL,
 CONSTRAINT [PK_QQuestion] PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[QReponse]    Script Date: 12/03/2020 21:09:53 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[QReponse](
	[IdCOAB] [int] NOT NULL,
	[IdProposition] [int] NOT NULL,
	[RDate] [datetime] NULL,
	[AltText] [nvarchar](max) NULL,
	[AltInt] [int] NULL,
 CONSTRAINT [PK_QReponse] PRIMARY KEY CLUSTERED 
(
	[IdCOAB] ASC,
	[IdProposition] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
GO
/****** Object:  Table [dbo].[QType]    Script Date: 12/03/2020 21:09:53 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[QType](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[Libelle] [nvarchar](50) NULL,
 CONSTRAINT [PK_QType] PRIMARY KEY CLUSTERED 
(
	[Id] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO
SET IDENTITY_INSERT [dbo].[QCategorie] ON 

INSERT [dbo].[QCategorie] ([Id], [Libelle]) VALUES (1, N'Utilisation de l’outil')
INSERT [dbo].[QCategorie] ([Id], [Libelle]) VALUES (2, N'Ergonomie de l’outil ')
INSERT [dbo].[QCategorie] ([Id], [Libelle]) VALUES (3, N'Fonctionnement de l’outil')
INSERT [dbo].[QCategorie] ([Id], [Libelle]) VALUES (4, N'Satisfaction globale')
SET IDENTITY_INSERT [dbo].[QCategorie] OFF
SET IDENTITY_INSERT [dbo].[QCompangne] ON 

INSERT [dbo].[QCompangne] ([Id], [Libelle], [Description], [Debut], [Fin]) VALUES (1, N'Test Compagne L', N'Test Compagne', CAST(N'2020-05-02T00:00:00.000' AS DateTime), CAST(N'2020-10-02T00:00:00.000' AS DateTime))
SET IDENTITY_INSERT [dbo].[QCompangne] OFF
SET IDENTITY_INSERT [dbo].[QProposition] ON 

INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (1, N'Directeur Général / Gérant', 1)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (2, N'DFC/DAF', 1)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (3, N'Cadre Financier/Comptable/Trésorier', 1)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (4, N'Administrateur', 2)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (5, N'Utilisateur', 2)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (6, N'Consultation uniquement ', 3)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (7, N'Création/Modification', 3)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (8, N'<= 5', 4)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (9, N'entre 5 et 10', 4)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (10, N'> 10', 4)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (11, N'Crédit documentaire', 5)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (12, N'Remise documentaire', 5)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (13, N'Ouverture et modification de CREDOC', 6)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (14, N'Téléchargement des SWIFT d’ouverture, de modification et de règlement CREDOC', 6)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (15, N'Notification à la réception du pli Bancaire CREDOC', 6)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (16, N'Notification à la réception du pli Bancaire REMDOC', 6)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (17, N'(A compléter)', 6)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (18, N'1', 7)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (19, N'2', 7)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (20, N'3', 7)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (21, N'4', 7)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (22, N'5', 7)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (23, N'Oui', 9)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (24, N'Oui', 10)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (25, N'Oui', 11)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (26, N'Oui', 12)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (27, N'Oui', 13)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (28, N'Oui', 14)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (29, N'Oui', 15)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (30, N'Oui', 16)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (31, N'Oui', 18)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (32, N'Non', 9)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (33, N'Non', 10)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (34, N'Non', 11)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (35, N'Non', 12)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (36, N'Non', 13)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (37, N'Non', 14)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (38, N'Non', 15)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (39, N'Non', 16)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (40, N'Non', 18)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (41, N'1', 17)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (42, N'2', 17)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (43, N'3', 17)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (44, N'4', 17)
INSERT [dbo].[QProposition] ([Id], [Libelle], [Question]) VALUES (45, N'5', 17)
SET IDENTITY_INSERT [dbo].[QProposition] OFF
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (1, N'Quel est votre position au sein de votre entreprise ?', 1, 1, 1, 1)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (2, N'Quel est votre profil sur SG@Trade ?', 2, 1, 1, 1)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (3, N'(Si utilisateur) Quelles sont vos habilitations', 3, 1, 1, 1)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (4, N'Combien de personnes, dont vous, utilisent SG@Trade, au sein de votre entreprise', 4, 1, 1, 1)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (5, N'Sur quel type d’opérations utilisez-vous généralement SG@Trade', 5, 1, 1, 2)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (6, N'Saviez-vous que SG@Trade vous offre la possibilité de (cocher chaque fonctionnalité connue)', 6, 1, 1, 2)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (7, N'Quelle note entre 1 et 5 attribueriez-vous au niveau de réponse à vos besoin de SG@Trade (1 =Ne répondant pas aux besoins , 5 = Répondant parfaitement aux besoins )', 7, 1, 1, 5)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (8, N'Quelles fonctionnalités auriez-vous souhaité voir ajoutées à SG@Trade', 8, 1, 1, 4)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (9, N'Trouvez-vous le système d’accès facile à utiliser', 1, 2, 1, 3)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (10, N'Trouvez-vous le module ouverture/modification CREDOC facile à utiliser', 2, 2, 1, 3)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (11, N'Trouvez-vous les fonctions de téléchargement facile à utiliser', 3, 2, 1, 3)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (12, N'Trouvez-vous la navigation globale en les différents menus faciles à utiliser', 4, 2, 1, 3)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (13, N'Rencontrez-vous des dysfonctionnements au moment de l’accès', 1, 3, 1, 3)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (14, N'Rencontrez-vous des dysfonctionnements à la création modifications de dossiers', 2, 3, 1, 3)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (15, N'Rencontrez-vous des dysfonctionnements lors des téléchargements de documents ', 3, 3, 1, 3)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (16, N'Rencontrez-vous des dysfonctionnements dans la navigation entre les différents menus', 4, 3, 1, 3)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (17, N'Quelle note entre 1 et 5 attribueriez-vous à votre satisfaction de SG@Trade (1 = Pas satisfait, 5 = Très satisfait)', 1, 4, 1, 5)
INSERT [dbo].[QQuestion] ([Id], [Libelle], [Numero], [Categorie], [Compagne], [Type]) VALUES (18, N'Recommanderiez-vous SG@Trade autours de vous', 2, 4, 1, 3)
SET IDENTITY_INSERT [dbo].[QType] ON 

INSERT [dbo].[QType] ([Id], [Libelle]) VALUES (1, N'Choix unique')
INSERT [dbo].[QType] ([Id], [Libelle]) VALUES (2, N'Choix Multiple')
INSERT [dbo].[QType] ([Id], [Libelle]) VALUES (3, N'OUI/NON')
INSERT [dbo].[QType] ([Id], [Libelle]) VALUES (4, N'Text Libre')
INSERT [dbo].[QType] ([Id], [Libelle]) VALUES (5, N'Note')
SET IDENTITY_INSERT [dbo].[QType] OFF
ALTER TABLE [dbo].[QProposition]  WITH CHECK ADD  CONSTRAINT [FK_Proposition_Question] FOREIGN KEY([Question])
REFERENCES [dbo].[QQuestion] ([Id])
GO
ALTER TABLE [dbo].[QProposition] CHECK CONSTRAINT [FK_Proposition_Question]
GO
ALTER TABLE [dbo].[QQuestion]  WITH CHECK ADD  CONSTRAINT [FK_Question_Categorie] FOREIGN KEY([Categorie])
REFERENCES [dbo].[QCategorie] ([Id])
GO
ALTER TABLE [dbo].[QQuestion] CHECK CONSTRAINT [FK_Question_Categorie]
GO
ALTER TABLE [dbo].[QQuestion]  WITH CHECK ADD  CONSTRAINT [FK_Question_Compagne] FOREIGN KEY([Compagne])
REFERENCES [dbo].[QCompangne] ([Id])
GO
ALTER TABLE [dbo].[QQuestion] CHECK CONSTRAINT [FK_Question_Compagne]
GO
ALTER TABLE [dbo].[QQuestion]  WITH CHECK ADD  CONSTRAINT [FK_Question_Type] FOREIGN KEY([Type])
REFERENCES [dbo].[QType] ([Id])
GO
ALTER TABLE [dbo].[QQuestion] CHECK CONSTRAINT [FK_Question_Type]
GO
ALTER TABLE [dbo].[QReponse]  WITH CHECK ADD  CONSTRAINT [FK_Reponse_COAB] FOREIGN KEY([IdCOAB])
REFERENCES [dbo].[COAB] ([Id])
GO
ALTER TABLE [dbo].[QReponse] CHECK CONSTRAINT [FK_Reponse_COAB]
GO
ALTER TABLE [dbo].[QReponse]  WITH CHECK ADD  CONSTRAINT [FK_Reponse_Proposition] FOREIGN KEY([IdProposition])
REFERENCES [dbo].[QProposition] ([Id])
GO
ALTER TABLE [dbo].[QReponse] CHECK CONSTRAINT [FK_Reponse_Proposition]
GO
