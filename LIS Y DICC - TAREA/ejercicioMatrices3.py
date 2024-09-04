#Se le pide al usuario que llene la matriz 2x3
matriz = []
for i in range(2):
    fila = []
    for j in range(3):
        num = float(input(f"Ingrese el numero para la posicion ({i+1},{j+1}): "))
        fila.append(num)
    matriz.append(fila)

#Se transpone la matriz
transpuesta = [[matriz[j] [i] for j in range(2)]for i in range (3)]
print("matriz transpuesta: ")
for fila in transpuesta:
    print(fila)