# se le pide al usuario que ingrese 5 numeros
numeros = []
for i in range(5):
    num = float(input(f"Ingrese el número {i+1}: "))
    numeros.append(num)

#Calular la suma de los elementos
suma = sum(numeros)
print("La suma de los elementos es:", suma)