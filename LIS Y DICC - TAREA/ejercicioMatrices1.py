#se le solicita al usuario llenar la matriz 3x3
matriz = []
for i in range(3):
    fila = []
    for j in range(3):
        num = float(input(f"Ingrese el numero para la posicion {i+1},{j+1}: "))
        fila.append(num)
    matriz.append(fila)

#se calcula la suma de los elementos
suma = sum([sum (fila) for fila in matriz])
print("La suma de los elementos de la matriz es: ", suma)