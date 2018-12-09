-- MySQL Script generated by MySQL Workbench
-- Sat Dec  8 01:25:45 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `onlineshop` DEFAULT CHARACTER SET utf8 ;
USE `onlineshop` ;

-- -----------------------------------------------------
-- Table `mydb`.`taikhoan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`taikhoan` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `NguoiDung` VARCHAR(45) NULL,
  `MatKhau` VARCHAR(45) NULL,
  `DienThoai` VARCHAR(45) NULL,
  `DiaChi` NVARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `HinhAnh` VARCHAR(45) NULL,
  `Quyen` INT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`sanpham`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`sanpham` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `MaSP` VARCHAR(45) NULL,
  `TenSP` NVARCHAR(45) NULL,
  `sanphamcol` VARCHAR(45) NULL,
  `LoaiSP` INT NULL,
  `NhaSanXuatId` VARCHAR(45) NULL,
  `sanphamcol1` VARCHAR(45) NULL,
  `XuatXu` VARCHAR(45) NULL,
  `MoTa` TEXT NULL,
  `NgayTao` DATETIME NULL,
  `SoLuong` INT NULL,
  `HinhAnh` VARCHAR(45) NULL,
  `Gia` DECIMAL NULL,
  `LuotXem` INT NULL,
  `TinhTrang` TINYINT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`nhasanxuat`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`nhasanxuat` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Ten` NVARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`diachinhanhang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`diachinhanhang` (
  `ID` INT NOT NULL,
  `NguoiDungId` INT NULL,
  `TenNguoiNhan` NVARCHAR(45) NULL,
  `SoDienThoai` VARCHAR(45) NULL,
  `DiaChiGiaoHang` NVARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`dathang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`dathang` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `UserId` INT NULL,
  `TongGia` DECIMAL NULL,
  `LoaiGiaoHang` INT NULL,
  `TinhTrang` INT NULL,
  `NgayTao` DATETIME NULL,
  `NgayDuKienGiaoHang` DATETIME NULL,
  `DiaChiNhanHangId` INT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`chitietdathang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`chitietdathang` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `DatHangId` INT NULL,
  `MaSP` INT NULL,
  `SoLuong` INT NULL,
  `Gia` DECIMAL NULL,
  `TinhTrang` INT NULL,
  `NgayDuKienGiaoHang` DATETIME NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`danhmuc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `onlineshop`.`danhmuc` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Ten` NVARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;

INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('1', 'SP001', 'Áo thun KiriMaru Basic AA10', '1', '1', 'VietNam', 'Nam', '2018-04-06 8:00', '123', '90000', '232', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('2', 'SP002', 'Áo thun KiriMaru Basic AA11', '1', '1', 'VietNam', 'Nam', '2018-04-07 8:06', '122', '90000', '321', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('3', 'SP003', 'Áo thun KiriMaru Basic AA12', '1', '1', 'VietNam', 'Nam', '2018-04-03 9:10', '160', '90000', '222', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('4', 'SP004', 'Áo thun KiriMaru Basic AA13', '1', '1', 'VietNam', 'Nam', '2018-04-08 8:15', '554', '100000', '432', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('5', 'SP005', 'Áo thun KiriMaru Basic AA14', '1', '1', 'VietNam', 'Nam', '2018-04-05 8:19', '112', '100000', '612', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('6', 'SP006', 'Áo thun KiriMaru Basic AA15', '1', '1', 'VietNam', 'Nam', '2018-06-05 8:19', '100', '100000', '112', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('7', 'SP007', 'Áo thun KiriMaru Basic AA17', '1', '1', 'VietNam', 'Nam', '2018-06-17 8:20', '333', '120000', '431', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('8', 'SP008', 'Áo thun KiriMaru Basic AA18', '1', '1', 'VietNam', 'Nam', '2018-05-20 11:20', '122', '12000', '443', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('9', 'SP009', 'Áo thun Adachi ST45', '2', '2', 'USA', 'Nữ', '2018-05-17 14:20', '321', '200000', '111', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('10', 'SP010', 'Áo thun Adachi ST46', '2', '2', 'USA', 'Nữ', '2018-05-18 14:20', '654', '200000', '155', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('11', 'SP011', 'Áo thun Adachi ST47', '2', '2', 'USA', 'Nữ', '2018-06-18 14:25', '124', '200000', '157', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('12', 'SP012', 'Áo thun Adachi ST48', '2', '2', 'USA', 'Nữ', '2018-06-18 14:25', '221', '200000', '200', '0');
INSERT INTO `onlineshop`.`sanpham` (`ID`, `MaSP`, `TenSP`, `LoaiSP`, `NhaSanXuatId`, `XuatXu`, `Mota`, `Ngaytao`, `Soluong`, `Gia`, `Luotxem`, `Tinhtrang`) VALUES ('13', 'SP013', 'Áo thun Adachi ST49', '2', '2', 'USA', 'Nữ', '2018-06-18 14:25', '224', '200000', '199', '0');


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
