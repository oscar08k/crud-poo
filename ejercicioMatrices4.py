#Se le pide al usuario llenar la primera matriz
matriz1 = []
print("Ingrese los valores para la primera matriz 2x2: ")
for i in range(2):
    fila = []
    for j in range(2):
        num = float(input(f"ingrese el numero para la posicion {i+1},{j+1}: "))
        fila.append(num)
    matriz1.append(fila)

# Pedimos al usuario que llene la segunda matriz 2x2
matriz2 = []
print("Ingrese los valores para la segunda matriz 2x2:")
for i in range(2):
    fila = []
    for j in range(2):
        num = float(input(f"Ingrese el número para la posición ({i+1},{j+1}): "))
        fila.append(num)
    matriz2.append(fila)

#se multiplican las matrices
resultado = [[0,0], [0,0]]
for i in range(2):
    resultado [i][j] = sum(matriz1[i][k] * matriz2[i][k] for k in range(2))

print("el resultado de la suma es: ")
for fila in resultado:
    print(fila)