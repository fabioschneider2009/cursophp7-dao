CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usuarios_insert`(
plogin VARCHAR(64),
psenha VARCHAR(256)
)
BEGIN
INSERT INTO tb_usuarios(deslogin,dessenha) VALUES(plogin,psenha);
SELECT * FROM tb_usuarios WHERE idusuario = last_insert_id();
END