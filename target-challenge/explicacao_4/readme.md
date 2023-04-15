Vamos considerar o carro como _c1_ e o caminhão como _c2_

é importante entender que quando os dois se encontram, o módulo da soma das distâncias percorridas por eles é a distância total entre as cidades, ou seja, 100km


> eq1: d<sub>c1</sub> + d<sub>c2</sub> = 100 

Sabendo que a distância percorrida é a velocidade vezes o tempo:

> eq2: d = v * t


E considerando que t é o momento do encontro (os dois veículos estão no mesmo ponto da rodovia no mesmo momento [por isso t é o mesmo para os dois]) podemos reescrever _eq1_ da seguinte maneira:

> eq1: v<sub>c1</sub> * t  + v<sub>c2</sub> * t = 100 ()

a velocidade média de c1 é 110km/h. Ainda assim é preciso determinar a velocidade média para _c2_ e para descobrirmos a velocidade média de c2 fazemos:
> eq4: v<sub>c2</sub> = d/t<sub>c2</sub> 

onde t<sub>c2</sub> é o momento em que c2 chega ao seu destino e d é a distância de 100km, logo

> eq4: v<sub>c2</sub> = 100/t<sub>c2</sub>

t<sub>c2</sub> por sua vez é:
> eq5: t<sub>c2</sub> = d/v + t<sub>pedágio</sub>

onde _t<sub>pedágio</sub>_ é tempo gasto nos pedágios e _v_ é a velocidade de _c2_ enquanto está em movimento

> eq5: t<sub>c2</sub> = 100k/80km/h + (10/60)

> eq5: t<sub>c2</sub> ~= 1,42

concluindo que:
> eq4: v<sub>c2</sub> = 100/1,42 

> eq4: v<sub>c2</sub> ~= 70,6

Com essas informações podemos voltar à _eq3_:
> eq3: 110 * t  + 70,6 * t = 100

> eq3: 110t + 70,6t = 100

> eq3: 180,6t = 100 => t ~= 0,56

Por último usando a função horária do movimento de _c2_ podemos determinar a posição de encontro:
> eq6: S = Si +/- V * t

> d<sub>encontro</sub> = 100 - 70,6 * 0.56

> d<sub>encontro</sub> ~= 60.9