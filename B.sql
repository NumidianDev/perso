USE [Formules]
GO
/****** Object:  Table [dbo].[ModeReglement]    Script Date: 20/10/2021 08:19:30 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[ModeReglement]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[ModeReglement](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[Code] [varchar](3) NOT NULL,
	[Mode] [nvarchar](max) NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]
END
GO
/****** Object:  Table [dbo].[TypeDeclaration]    Script Date: 20/10/2021 08:19:31 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
IF NOT EXISTS (SELECT * FROM sys.objects WHERE object_id = OBJECT_ID(N'[dbo].[TypeDeclaration]') AND type in (N'U'))
BEGIN
CREATE TABLE [dbo].[TypeDeclaration](
	[Id] [int] IDENTITY(1,1) NOT NULL,
	[Code] [varchar](25) NOT NULL,
	[Domaine] [varchar](255) NOT NULL,
	[Descriptif] [varchar](2048) NULL
) ON [PRIMARY]
END
GO
SET IDENTITY_INSERT [dbo].[ModeReglement] ON 

INSERT [dbo].[ModeReglement] ([Id], [Code], [Mode]) VALUES (1, N'R01', N'TRANSFERE LIBRE')
INSERT [dbo].[ModeReglement] ([Id], [Code], [Mode]) VALUES (2, N'R02', N'REMDOC PAYABLE A VUE')
INSERT [dbo].[ModeReglement] ([Id], [Code], [Mode]) VALUES (3, N'R03', N'REMDOC CONTRE ACCEPTATION')
INSERT [dbo].[ModeReglement] ([Id], [Code], [Mode]) VALUES (4, N'R04', N'REMDOC CONTRE ACCEPTATION AVALISEE')
INSERT [dbo].[ModeReglement] ([Id], [Code], [Mode]) VALUES (5, N'R05', N'CREDOC IRREVOCABLE CONTRE ACCEPTATION')
INSERT [dbo].[ModeReglement] ([Id], [Code], [Mode]) VALUES (6, N'R06', N'CREDOC IRRIVOCABLE CONFIRMER PAYABLE A VUE')
INSERT [dbo].[ModeReglement] ([Id], [Code], [Mode]) VALUES (7, N'R07', N'CREDOC IRREVOCABLE et CONFIRMER CONTRE ACCEPTATION')
INSERT [dbo].[ModeReglement] ([Id], [Code], [Mode]) VALUES (8, N'R08', N'PAIEMENT DIFFERE 120 JOUS')
INSERT [dbo].[ModeReglement] ([Id], [Code], [Mode]) VALUES (9, N'R09', N'CREDOC NON CONFIRMER')
INSERT [dbo].[ModeReglement] ([Id], [Code], [Mode]) VALUES (10, N'R10', N'AUTRE')
SET IDENTITY_INSERT [dbo].[ModeReglement] OFF
GO
SET IDENTITY_INSERT [dbo].[TypeDeclaration] ON 

INSERT [dbo].[TypeDeclaration] ([Id], [Code], [Domaine], [Descriptif]) VALUES (1, N'TRFT_HDET', N'Transfert Hors Dette ', N'Transferts de devises à l’étranger pour le règlement d’une opération  sur comptes en dinars')
INSERT [dbo].[TypeDeclaration] ([Id], [Code], [Domaine], [Descriptif]) VALUES (2, N'TRFT-DET', N'Transfert Dette', N'Transferts de devises à l’étranger pour le remboursement d’une dette')
INSERT [dbo].[TypeDeclaration] ([Id], [Code], [Domaine], [Descriptif]) VALUES (3, N'MIB', N'Marché Interbancaire', N'Cessions de devises sur le marché interbancaire')
INSERT [dbo].[TypeDeclaration] ([Id], [Code], [Domaine], [Descriptif]) VALUES (4, N'RBA', N'Rapatriement cédé à la Banque d’Algérie', N'Cessions de devises cédées à la banque d’Algérie')
INSERT [dbo].[TypeDeclaration] ([Id], [Code], [Domaine], [Descriptif]) VALUES (5, N'RCD', N'Rapatriement sur compte devise', N'Cessions de devises sur comptes en devises')
INSERT [dbo].[TypeDeclaration] ([Id], [Code], [Domaine], [Descriptif]) VALUES (6, N'TCD', N'Transfert sur compte devise', N'Transferts de devises à l’étranger à partir de comptes en devises')
INSERT [dbo].[TypeDeclaration] ([Id], [Code], [Domaine], [Descriptif]) VALUES (7, N'UMA', N'Convention Union du Maghreb', N'Transfert et rapatriement dans le cadre de l''UMA')
SET IDENTITY_INSERT [dbo].[TypeDeclaration] OFF
GO
