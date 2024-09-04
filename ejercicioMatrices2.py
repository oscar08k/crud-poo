#Generar la matriz de identidad 4x4
matriz_identidad = [[1 if i == j else 0 for j in range(4)]for i in range(4)]
print("Matriz identidad 4x4:")
for fila in matriz_identidad:
    print(fila)