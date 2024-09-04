# se le pide al usuario que ingrese 10 numeros
numeros = []
for i in range(10):
    num = float(input(f"Ingrese el numero {i+1}:"))
    numeros.append(num)

#Calcular el promedio
promedio = sum(numeros) / len(numeros)
print("El promedio de los numero ingresados es:", promedio)