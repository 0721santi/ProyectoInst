<html>
    <head>
        <meta charset="UTF-8">
        <title>Table Test</title>
        <style>
            /* css que especifica los colores de la tabla */

            tr:nth-child(even) {background-color: #56f4ff;}
            tr:nth-child(odd) {background-color: #ff82bf;}

            th {
             background-color: aliceblue;
             color:black;
            }
            /* Cosas de formato */
            th, td {
             text-align: left;
             padding: 8px;
            }

        </style>
    </head>
    <body>
        <center>
        <h2>Prueba de tabla</h2>
        <table>
        <tr>
            <th colspan="10"><center>Bienvenidos al juego</center></th>
            <!--Esto de acá especifica que tanto el header de la tabla va a abarcar, en este caso va a
            abarcar todas las 10 columnas como si fuera un titulo centrado, pero si quieren cambiar
            el número de columnas solo tienen que cambiar el numero del colspan-->
        </tr>
        <tr>
            <td><strong>1</strong></td>
            <td><strong>2</strong></td>
            <td><strong>3</strong></td>
            <td><strong>4</strong></td>
            <td><strong>5</strong></td>
            <td><strong>6</strong></td>
            <td><strong>7</strong></td>
            <td><strong>8</strong></td>
            <td><strong>9</strong></td>
            <td><strong>10</strong></td>
        </tr>
        <tr>
            <td><strong>11</strong></td>
            <td><strong>12</strong></td>
            <td><strong>13</strong></td>
            <td><strong>14</strong></td>
            <td><strong>15</strong></td>
            <td><strong>16</strong></td>
            <td><strong>17</strong></td>
            <td><strong>18</strong></td>
            <td><strong>19</strong></td>
            <td><strong>20</strong></td>
        </tr>
        <tr>
            <td><strong>21</strong></td>
            <td><strong>22</strong></td>
            <td><strong>23</strong></td>
            <td><strong>24</strong></td>
            <td><strong>25</strong></td>
            <td><strong>26</strong></td>
            <td><strong>27</strong></td>
            <td><strong>28</strong></td>
            <td><strong>29</strong></td>
            <td><strong>30</strong></td>
        </tr>
        <tr>
            <td><strong>31</strong></td>
            <td><strong>32</strong></td>
            <td><strong>33</strong></td>
            <td><strong>34</strong></td>
            <td><strong>35</strong></td>
            <td><strong>36</strong></td>
            <td><strong>37</strong></td>
            <td><strong>38</strong></td>
            <td><strong>39</strong></td>
            <td><strong>40</strong></td>
        </tr>
        <tr>
            <td><strong>41</strong></td>
            <td><strong>42</strong></td>
            <td><strong>43</strong></td>
            <td><strong>44</strong></td>
            <td><strong>45</strong></td>
            <td><strong>46</strong></td>
            <td><strong>47</strong></td>
            <td><strong>48</strong></td>
            <td><strong>49</strong></td>
            <td><strong>50</strong></td>
        </tr>
        <tr>
            <td colspan="2"><strong>51</strong></td>
            <td colspan="2"><strong>52</strong></td>
            <td colspan="2"><strong>53</strong></td>
            <td colspan="2"><strong>54</strong></td>
            <td colspan="2"><strong>55</strong></td>
            <!--Misma vuelta que antes del colspan, pero para que no hayan espacios
            en blanco al final de la tabla-->
        </tr>
        </table>
        </center>
    </body>
</html>