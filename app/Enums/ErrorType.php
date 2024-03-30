<?php
namespace App\Enums;

enum ErrorType : int
{
    const DUPLICATE_KEY = 1062; // Violación de clave única
    const FOREIGN_KEY_CONSTRAINT = 1452; // Violación de clave externa
    const COLUMN_NOT_FOUND = 1054; // Columna no encontrada
    const TABLE_NOT_FOUND = 1146; // Tabla no encontrada
    const SYNTAX_ERROR = 1064; // Error de sintaxis SQL
    const INTEGRITY_CONSTRAINT_VIOLATION = 23000; // Violación de restricción de integridad (clave única o clave externa)
}
