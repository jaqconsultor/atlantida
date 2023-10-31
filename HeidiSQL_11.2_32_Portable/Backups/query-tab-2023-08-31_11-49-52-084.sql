CREATE TABLE `contratos` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`Nacionalidad_Titular` VARCHAR(2) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Cedula_Titular` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Nombre_TItular_Beneficiario` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Apellido_TItular_Beneficiario` VARCHAR(100) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Estado_Civil` VARCHAR(2) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Sexo_Titular_Beneficiario` VARCHAR(2) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Fecha_Nacimiento_Titular_Beneficiario` DATE NULL DEFAULT NULL,
	`Parentesco` VARCHAR(20) NOT NULL DEFAULT 'Afiliado Principal' COLLATE 'utf8mb4_general_ci',
	`Nombre_Agente_Recaudador` VARCHAR(60) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Tipo_de_Cuenta` VARCHAR(2) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Numero_de_Cuenta` VARCHAR(20) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Tipo_de_Vencimiento` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Codigo_Empresa` VARCHAR(2) NOT NULL DEFAULT '01' COLLATE 'utf8mb4_general_ci',
	`Codigo_Sucursal` VARCHAR(2) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Numero_de_Telefono` VARCHAR(13) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Correo_Electronico` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Codigo_Cia_Seguro` VARCHAR(50) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Codigo_Plan_en_SISER` VARCHAR(3) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Codigo_Productor_Asesor` VARCHAR(4) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Estado` VARCHAR(1) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	`Estado_Observacion` VARCHAR(255) NULL DEFAULT NULL COLLATE 'utf8mb4_general_ci',
	PRIMARY KEY (`id`) USING BTREE
)
COLLATE='utf8mb4_general_ci'
ENGINE=InnoDB
;
