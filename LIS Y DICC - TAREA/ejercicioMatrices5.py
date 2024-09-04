#sel e pide al usuario llenarc la matriz 3x3
matriz = []
for i in range(3):
    fila = []
    for j in range(3):
        num = float(input(f"ingrese el numero para la posicion {i+1},{j+1}: "))
        fila.append(num)
    matriz.append(fila)

#Se muestra la diagonal principal
diagonal = [matriz [i][i] for i in range(3)]
print("Los elementos de la diagonal principal son:", diagonal)