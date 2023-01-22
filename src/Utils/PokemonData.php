<?php

namespace Anghel\LuchaPokemon\Utils;


class PokemonData
{
    // Elementos
    private array $elementos = ["Bicho","Dragón","Eléctrico","Hada","Lucha","Fuego","Volador","Fantasma","Planta","Tierra","Hielo","Normal","Veneno","Psíquico","Roca","Acero","Agua"];
    // Nombres por elementos
    private array $nombresAcero = ["Steelix","Skarmory","Mawile","Aron","Lairon","Aggron","Beldum","Metang","Metagross","Registeel","Jirachi","Bronzor","Bronzong","Dialga","Klink","Klang","Klinklang","Cobalion","Honedge","Doublade","Aegislash","Klefki","Celesteela","Magearna","Meltan","Melmetal"];
    private array $nombresAgua = ["Squirtle","Wartortle","Blastoise","Psyduck","Golduck","Poliwag","Poliwhirl","Poliwrath","Tentacool","Tentacruel","Slowpoke","Slowbro","Seel","Dewgong","Shellder","Cloyster","Krabby","Kingler","Horsea","Seadra","Goldeen","Seaking","Staryu","Starmie","Magikarp","Gyarados","Lapras","Vaporeon","Totodile","Croconaw","Feraligatr","Chinchou","Lanturn","Marill","Azumarill","Politoed","Wooper","Quagsire","Slowking","Qwilfish","Corsola","Remoraid","Octillery","Mantine","Kingdra","Suicune","Mudkip","Marshtomp","Swampert","Lotad","Lombre","Ludicolo","Wingull","Pelipper","Carvanha","Sharpedo","Wailmer","Wailord","Barboach","Whiscash","Corphish","Crawdaunt","Feebas","Milotic","Clamperl","Huntail","Gorebyss","Relicanth","Luvdisc","Kyogre","Piplup","Prinplup","Empoleon","Buizel","Floatzel","Shellos","Gastrodon","Finneon","Lumineon","Mantyke","Palkia","Phione","Manaphy","Oshawott","Dewott","Samurott","Panpour","Simipour","Tympole","Palpitoad","Seismitoad","Basculin","Tirtouga","Carracosta","Ducklett","Swanna","Frillish","Jellicent","Alomomola","Keldeo","Froakie","Frogadier","Greninja","Clauncher","Clawitzer","Popplio","Brionne","Primarina","Wishiwashi","Dewpider","Araquanid","Pyukumuku","Bruxish","Tapu Fini"];
    private array $nombresBicho = ["Caterpie","Metapod","Butterfree","Weedle","Kakuna","Beedrill","Paras","Parasect","Venonat","Venomoth","Scyther","Pinsir","Ledyba","Ledian","Spinarak","Ariados","Yanma","Pineco","Forretress","Scizor","Shuckle","Heracross","Wurmple","Silcoon","Beautifly","Cascoon","Dustox","Surskit","Masquerain","Nincada","Ninjask","Shedinja","Volbeat","Illumise","Kricketot","Kricketune","Burmy","Wormadam","Mothim","Combee","Vespiquen","Yanmega","Sewaddle","Swadloon","Leavanny","Venipede","Whirlipede","Scolipede","Dwebble","Crustle","Karrablast","Escavalier","Joltik","Galvantula","Shelmet","Accelgor","Durant","Larvesta","Volcarona","Genesect","Scatterbug","Spewpa","Vivillon","Grubbin","Charjabug","Vikavolt","Cutiefly","Ribombee","Wimpod","Golisopod","Buzzwole","Pheromosa"];
    private array $nombresDragon = ["Dratini","Dragonair","Dragonite","Altaria","Bagon","Shelgon","Salamence","Latias","Latios","Rayquaza","Gible","Gabite","Garchomp","Axew","Fraxure","Haxorus","Druddigon","Reshiram","Zekrom","Kyurem","Goomy","Sliggoo","Goodra","Zygarde","Jangmo-o","Hakamo-o","Kommo-o"];
    private array $nombresElectrico = ["Pikachu","Raichu","Raichu de Alola","Magnemite","Magneton","Voltorb","Electrode","Electabuzz","Jolteon","Zapdos","Pichu","Mareep","Flaaffy","Ampharos","Elekid","Raikou","Electrike","Manectric","Plusle","Minun","Shinx","Luxio","Luxray","Pachirisu","Magnezone","Electivire","Rotom","Blitzle","Zebstrika","Emolga","Tynamo","Eelektrik","Eelektross","Thundurus","Helioptile","Heliolisk","Dedenne","Oricorio","Togedemaru","Tapu Koko","Xurkitree","Zeraora"];
    private array $nombresFantasma = ["Gastly","Haunter","Gengar","Misdreavus","Shuppet","Banette","Duskull","Dusclops","Drifloon","Drifblim","Mismagius","Spiritomb","Dusknoir","Giratina","Yamask","Cofagrigus","Litwick","Lampent","Chandelure","Phantump","Trevenant","Pumpkaboo","Gourgeist","Oricorio","Sandygast","Palossand","Mimikyu","Dhelmise"];
    private array $nombresFuego = ["Charmander","Charmeleon","Charizard","Vulpix","Ninetales","Growlithe","Arcanine","Ponyta","Rapidash","Marowak de Alola","Magmar","Flareon","Moltres","Cyndaquil","Quilava","Typhlosion","Slugma","Magcargo","Magby","Entei","Ho-Oh","Torchic","Combusken","Blaziken","Numel","Camerupt","Torkoal","Chimchar","Monferno","Infernape","Magmortar","Heatran","Tepig","Pignite","Emboar","Pansear","Simisear","Darumaka","Darmanitan","Heatmor","Fennekin","Braixen","Delphox","Fletchinder","Talonflame","Litleo","Pyroar","Volcanion","Litten","Torracat","Incineroar","Oricorio","Turtonator","Blacephalon"];
    private array $nombresHada = ["Clefairy","Clefable","Cleffa","Togepi","Togetic","Snubbull","Granbull","Togekiss","Flabébé","Floette","Florges","Spritzee","Aromatisse","Swirlix","Slurpuff","Sylveon","Xerneas","Comfey"];
    private array $nombresHielo = ["Sandshrew de Alola","Sandslash de Alola","Vulpix de Alola","Ninetales de Alola","Jynx","Articuno","Swinub","Piloswine","Delibird","Smoochum","Snorunt","Glalie","Spheal","Sealeo","Walrein","Regice","Glaceon","Mamoswine","Froslass","Vanillite","Vanillish","Vanilluxe","Cubchoo","Beartic","Cryogonal","Bergmite","Avalugg"];
    private array $nombresLucha = ["Mankey","Primeape","Machop","Machoke","Machamp","Hitmonlee","Hitmonchan","Tyrogue","Hitmontop","Makuhita","Hariyama","Meditite","Medicham","Riolu","Lucario","Timburr","Gurdurr","Conkeldurr","Throh","Sawk","Mienfoo","Mienshao","Pancham","Pangoro","Hawlucha","Crabrawler","Crabominable","Passimian","Marshadow"];
    private array $nombresNormal = ["Rattata","Raticate","Jigglypuff","Wigglytuff","Meowth","Persian","Lickitung","Chansey","Kangaskhan","Tauros","Ditto","Eevee","Porygon","Snorlax","Sentret","Furret","Igglybuff","Aipom","Girafarig","Dunsparce","Teddiursa","Ursaring","Porygon2","Stantler","Smeargle","Miltank","Blissey","Zigzagoon","Linoone","Slakoth","Vigoroth","Slaking","Whismur","Loudred","Exploud","Azurill","Skitty","Delcatty","Spinda","Zangoose","Castform","Kecleon","Bidoof","Bibarel","Ambipom","Buneary","Lopunny","Glameow","Purugly","Happiny","Munchlax","Lickilicky","Porygon-Z","Regigigas","Arceus","Patrat","Watchog","Lillipup","Herdier","Stoutland","Audino","Minccino","Cinccino","Deerling","Sawsbuck","Bouffalant","Meloetta","Bunnelby","Diggersby","Furfrou","Yungoos","Gumshoos","Stufful","Bewear","Oranguru","Código Cero","Silvally","Komala","Drampa"];
    private array $nombresPlanta = ["Bulbasaur","Ivysaur","Venusaur","Oddish","Gloom","Vileplume","Bellsprout","Weepinbell","Victreebel","Exeggcute","Exeggutor","Exeggutor de Alola","Tangela","Chikorita","Bayleef","Meganium","Bellossom","Hoppip","Skiploom","Jumpluff","Sunkern","Sunflora","Treecko","Grovyle","Sceptile","Seedot","Nuzleaf","Shiftry","Shroomish","Breloom","Roselia","Cacnea","Cacturne","Tropius","Turtwig","Grotle","Torterra","Budew","Roserade","Cherubi","Cherrim","Carnivine","Snover","Abomasnow","Tangrowth","Leafeon","Shaymin","Snivy","Servine","Serperior","Pansage","Simisage","Cottonee","Whimsicott","Petilil","Lilligant","Maractus","Foongus","Amoonguss","Ferroseed","Ferrothorn","Virizion","Chespin","Quilladin","Chesnaught","Skiddo","Gogoat","Rowlet","Dartrix","Decidueye","Fomantis","Lurantis","Morelull","Shiinotic","Bounsweet","Steenee","Tsareena","Tapu Bulu","Kartana"];
    private array $nombresPsiquico = ["Abra","Kadabra","Alakazam","Drowzee","Hypno","Mr. Mime","Mewtwo","Mew","Natu","Xatu","Espeon","Unown","Wobbuffet","Lugia","Celebi","Ralts","Kirlia","Gardevoir","Spoink","Grumpig","Chimecho","Wynaut","Deoxys","Chingling","Mime Jr.","Gallade","Uxie","Mesprit","Azelf","Cresselia","Victini","Munna","Musharna","Woobat","Swoobat","Sigilyph","Gothita","Gothorita","Gothitelle","Solosis","Duosion","Reuniclus","Elgyem","Beheeyem","Espurr","Meowstic","Hoopa","Oricorio","Tapu Lele","Cosmog","Cosmoem","Solgaleo","Lunala","Necrozma"];
    private array $nombresRoca = ["Geodude","Geodude de Alola","Graveler","Graveler de Alola","Golem","Golem de Alola","Onix","Omanyte","Omastar","Kabuto","Kabutops","Aerodactyl","Sudowoodo","Larvitar","Pupitar","Tyranitar","Nosepass","Lunatone","Solrock","Lileep","Cradily","Anorith","Armaldo","Regirock","Cranidos","Rampardos","Shieldon","Bastiodon","Bonsly","Probopass","Roggenrola","Boldore","Gigalith","Archen","Archeops","Terrakion","Binacle","Barbaracle","Tyrunt","Tyrantrum","Amaura","Aurorus","Carbink","Diancie","Rockruff","Lycanroc","Minior","Nihilego","Stakataka"];
    private array $nombresSiniestro = ["Rattata de Alola","Raticate de Alola","Meowth de Alola","Persian de Alola","Umbreon","Murkrow","Sneasel","Houndour","Houndoom","Poochyena","Mightyena","Sableye","Absol","Honchkrow","Weavile","Darkrai","Purrloin","Liepard","Scraggy","Scrafty","Zorua","Zoroark","Pawniard","Bisharp","Vullaby","Mandibuzz","Deino","Zweilous","Hydreigon","Inkay","Malamar","Yveltal","Guzzlord"];
    private array $nombresTierra = ["Sandshrew","Sandslash","Diglett","Diglett de Alola","Dugtrio","Dugtrio de Alola","Cubone","Marowak","Rhyhorn","Rhydon","Gligar","Phanpy","Donphan","Trapinch","Vibrava","Flygon","Baltoy","Claydol","Groudon","Hippopotas","Hippowdon","Rhyperior","Gliscor","Drilbur","Excadrill","Sandile","Krokorok","Krookodile","Stunfisk","Golett","Golurk","Landorus","Mudbray","Mudsdale"];
    private array $nombresVeneno = ["Ekans","Arbok","Nidoran♀","Nidorina","Nidoqueen","Nidoran♂","Nidorino","Nidoking","Zubat","Golbat","Grimer","Grimer de Alola","Muk","Muk de Alola","Koffing","Weezing","Crobat","Gulpin","Swalot","Seviper","Stunky","Skuntank","Skorupi","Drapion","Croagunk","Toxicroak","Trubbish","Garbodor","Skrelp","Dragalge","Mareanie","Toxapex","Salandit","Salazzle","Poipole","Naganadel"];
    private array $nombresVolador = ["Pidgey","Pidgeotto","Pidgeot","Spearow","Fearow","Farfetch'd","Doduo","Dodrio","Hoothoot","Noctowl","Taillow","Swellow","Swablu","Starly","Staravia","Staraptor","Chatot","Pidove","Tranquill","Unfezant","Rufflet","Braviary","Tornadus","Fletchling","Noibat","Noivern","Pikipek","Trumbeak","Toucannon"];

    // Movimientos por elemento
    private array $movimientosAgua = ["Acua aro","Acua cola","Acua jet","Agua lodosa","Empapar","Azote torrencial","Branquibocado","Buceo","Burbuja","Cascada","Chorro de vapor","Concha filo","Danza lluvia","Disparo certero","Envite acuático","Escaldar","Gota vital","Hidrobomba","Hidrocañón","Hidrochorro","Hidropulso","Martillazo","Pistola agua","Pulpocañón","Pulso primigenio","Rayo burbuja","Refugio","Salmuera","Salpicar","Shuriken de agua","Surf","Tenaza","Torbellino","Voto agua"];
    private array $movimientosAcero = ["Ala de acero","Aligerar","Bomba imán","Cabeza de hierro","Cambio de marcha","Cola férrea","Cuerpo pesado","Defensa férrea","Deseo oculto","Disparo espejo","Eco metálico","Embate supremo","Escudo real","Foco resplandor","Garra metal","Giro bola","Metaláser","Puño bala","Puño meteoro","Represión metal","Rueda doble"];
    private array $movimientosBicho = ["A defender","Al ataque","Auxilio","Chupavidas","Cortefuria","Danza aleteo","Disparo demora","Doble rayo","Doble ataque","Estoicismo","Ida y vuelta","Megacuerno","Picadura","Pin misil","Polvo ira","Luminicola","Rodillo de púas","Telaraña","Tijera X","Viento plata","Zumbido"];
    private array $movimientosDragon = ["Cañón Dinamax","Carga dragón","Cola dragón","Ciclón","Cometa draco","Corte vacío","Danza dragón","Distorsión","Dracoenergía","Dracoflechas","Dragoaliento","Enfado","Estruendo escama","Furia dragón","Garra dragón","Golpe bis","Pulso dragón","Ráfaga escamas","Rayo infinito","Vasto impacto"];
    private array $movimientosElectrico = ["Amplificador","Alto voltaje","Ataque fulgor","Bola voltio","Carga","Chispa","Chispazo","Colmillo rayo","Electrocañón","Electrojaula","Electropico","Electrotela","Impactrueno","Levitón","Onda trueno","Onda voltio","Placaje eléctrico","Puño trueno","Rayo","Rayo carga","Rayo fusión","Rueda aural","Trueno","Voltiocambio","Voltio cruel"];
    private array $movimientosFantasma = ["Bola sombra","Garra umbría","Golpe fantasma","Golpe umbrío","Impresionar","Infortunio","Lengüetazo","Maldición","Marcha espectral","Mismo destino","Orbes espectro","Pesadilla","Puño sombra","Rabia","Rayo confuso","Rencor","Rencor reprimido","Sombra vil","Tinieblas","Viento aciago"];
    private array $movimientosFuego = ["Anillo ígneo","Ascuas","Balón ígneo","Bomba ígnea","Calcinación","Colmillo ígneo","Danza llama","Día soleado","Envite ígneo","Erupción de ira","Estallido","Fuego fatuo","Fuego sagrado","Giro fuego","Golpe calor","Humareda","Infierno","Lanzallamas","Llama azul","Llama fusión","Llamarada","Lluvia ígnea","Nitrocarga","Onda ígnea","Patada ígnea","Pirotecnia","Puño fuego","Rueda fuego","Sofoco","V de fuego","Voto fuego"];
    private array $movimientosHada = ["Beso drenaje","Beso dulce","Brillo mágico","Campo de niebla","Carantoña","Cautivapor","Cerrojo feérico","Choque anímico","Decoración","Defensa floral","Encanto","Fuerza lunar","Geocontrol","Luz aniquiladora","Luz lunar","Niebla aromática","Ojitos tiernos","Truco defensa","Viento feérico","Voz cautivadora"];
    private array $movimientosHielo = ["Alud","Bola hielo","Canto helado","Carámbano","Chuzos","Colmillo hielo","Frío polar","Granizo","Lanza glacial","Llama gélida","Mundo gélido","Neblina","Niebla","Nieve polvo","Puño hielo","Rayo aurora","Rayo gélido","Rayo hielo","Triple axel","Vaho gélido","Ventisca","Viento hielo"];
    private array $movimientosLucha = ["A bocajarro","Anticipo","Asalto estelar","Bastión final","Contraataque","Corpulencia","Demolición","Desquite","Detección","Doble patada","Empujón","Esfera aural","Espabila","Espada santa","Fuerza bruta","Gancho alto","Golpe kárate","Golpe roca","Inversión","Llave corsé","Llave giro","Machada","Motivación","Movimiento sísmico","Octopresa","Onda certera","Onda vacío","Palmeo","Patada baja","Patada giro","Patada salto","Patada salto alta","Plancha corporal","Puntapié","Puño certero","Puño drenaje","Puño dinámico","Puño incremento","Sable místico","Sacrificio","Sumisión","Tajo cruzado","Tiro vital","Triple flecha","Triple patada","Ultrapuño"];
    private array $movimientosNormal = ["Acupresión","Adaptación","Afilar","Agarre","Agarrón","Aguante","Alboroto","Alivio","Amago","Ovocuración","Antojo","Anulación","Arañazo","Ariete","As oculto","Atadura","Ataque furia","Ataque rápido","Atiborramiento","Atracción","Aullido","Autodestrucción","Avivar","Ayuda","Azote","Batido","Beso amoroso","Bloqueo","Bomba huevo","Bomba sónica","Bostezo","Cabezazo","Cambio de cancha","Campana cura","Camuflaje","Canon","Canto","Canto arcaico","Canto mortal","Cara susto","Cede paso","Chirrido","Clavo cañón","Clonatipo","Conjuro","Contoneo","Conversión","Conversión2","Copión","Cornada","Corte","Cosquillas","Cuchillada","Danza amiga","Danza caos","Danza espada","Daño secreto","Derribo","Desarrollo","Deseo","Deslumbrar","Destello","Destructor","Día de pago","Divide dolor","Doble equipo","Doble filo","Doble golpe","Doblebofetón","Don natural","Dulce aroma","Eco voz","Escupir","Esfuerzo","Esquema","Estímulo","Estrujón","Explosión","Falso tortazo","Fijar blanco","Foco energía","Fortaleza","Frustración","Fuerza","Furia","Garra brutal","Giga impacto","Giro rápido","Golpe","Golpe cabeza","Golpe cuerpo","Golpes furia","Gruñido","Guardia baja","Guillotina","Hiper colmillo","Hiperrayo","Hora del té","Imagen","Látigo","Mal de ojo","Malicioso","Autosugestión","Megapatada","Megapuño","Meteorobola","Metrónomo","Mimético","Ofrenda","Onda simple","Otra vez","Pantalla de humo","Perforador","Pisotón","Placaje","Plumerazo","Poder oculto","Atizar","Presa","Presente","Profecía","Protección","Puño cometa","Puño mareo","Rapidez","Rastreo","Reciclaje","Recuperación","Reducción","Refuerzo","Relajo","Relevo","Remolino","Constricción","Represalia","Reserva","Restricción","Retribución","Rizo defensa","Rompecoraza","Ronquido","Rugido","Salpicadura","Seducción","Sentencia","Señuelo","Sol matinal","Sonámbulo","Sorpresa","Superdiente","Supersónico","Sustituto","Tambor","Tecno shock","Telépata","Tragar","Transformación","Treparrocas","Triataque","Última baza","Velo sagrado","Velocidad extrema","Venganza","Viento cortante","Vozarrón","Yo primero"];
    private array $movimientosPlanta = ["Abatidoras","Absorber","Ácido málico","Aromaterapia","Arraigo","Astadrenaje","Batería asalto","Bomba germen","Brazo pincho","Cepo","Ciclón de hojas","Clorofiláser","Cura selvática","Danza pétalo","Drenadoras","Energibola","Espora","Esporagodón","Fitoimpulso","Fogonazo","Fuerza G","Gigadrenado","Hierba lazo","Hoja afilada","Hoja aguda","Hoja mágica","Latigazo","Látigo cepa","Lluevehojas","Mazazo","Megaagotar","Paralizador","Planta feroz","Punzada rama","Rayo solar","Recurrente","Rizo algodón","Silbato","Síntesis","Somnífero","Voto planta"];
    private array $movimientosPsiquico = ["Agilidad","Ala aural","Amnesia","Anticura","Arrumaco","Asalto barrera","Barrera","Bola neblina","Cabezazo zen","Cambio banda","Cambio de banda","Cambiaalmas","Cambiadefensa","Cambiafuerza","Capa mágica","Cerca","Come sueños","Confusión","Conjuro funesto","Danza lunar","Descanso","Deseo cura","Espacio raro","Gran ojo","Gravedad","Hipnosis","Imitación","Intercambio","Isofuerza","Isoguardia","Kinético","Manto espejo","Masa cósmica","Meditación","Onda mental","Pantalla luz","Paranormal","Paso dimensional","Paz mental","Poder reserva","Polvo mágico","Premonición","Psicoataque","Psicocambio","Psicocorte","Psicocarga","Psicoonda","Psicorrayo","Psíquico","Pulso cura","Reflejo","Resplandor","Sincrorruido","Telequinesis","Teletransporte","Truco","Truco fuerza","Vasta fuerza","Zona extraña","Zona mágica"];
    private array $movimientosRoca = ["Alquitranazo","Antiaéreo","Avalancha","Desenrollar","Hachazo pétreo","Joya de luz","Lanzarrocas","Pedrada","Poder pasado","Pulimento","Rayo meteórico","Roca afilada","Romperrocas","Testarazo","Tormenta de arena","Tormenta de diamantes","Trampa rocas","Tumba rocas","Vasta guardia"];
    private array $movimientosSiniestro = ["Alarido","Afilagarras","Brecha negra","Buena baza","Camelo","Castigo","Desahogo","Desarme","Embargo","Finta","Golpe bajo","Golpe oscuro","Irreverencia","Juego sucio","Ladrón","Lanzamiento","Legado","Llanto falso","Maquinación","Mofa","Mordisco","Obstrucción","Paliza","Persecución","Presa maxilar","Pulso noche","Pulso umbrío","Robo","Tajo metralla","Tajo umbrío","Tormento","Trapicheo","Triturar","Último lugar","Vendetta"];
    private array $movimientosTierra = ["Ataque arena","Ataque óseo","Bofetón lodo","Bomba fango","Bucle arena","Chapoteo lodo","Disparo lodo","Excavar","Filo del abismo","Fisura","Hueso palo","Huesomerang","Magnitud","Mil flechas","Mil temblores","Púas","Taladradora","Terratemblor","Terremoto","Tierra viva"];
    private array $movimientosVeneno = ["Ácido","Armadura ácida","Bilis","Bomba ácida","Bomba lodo","Carga tóxica","Cola veneno","Colmillo veneno","Enrosque","Gas venenoso","Lanza mugre","Moluscañón","Niebla clara","Onda tóxica","Picotazo venenoso","Polución","Polvo veneno","Púas tóxicas","Puya nociva","Residuos","Tóxico","Veneno X"];
    private array $movimientosVolador = ["Acróbata","Aerochorro","Aire afilado","Ala bis","Ascenso draco","Ataque aéreo","Ataque ala","Bote","Caída libre","Cháchara","Danza pluma","Despejar","Golpe aéreo","Movimiento espejo","Pájaro osado","Pico taladro","Picotazo","Picoteo","Respiro","Tajo aéreo","Tornado","Vendaval","Viento afín","Vuelo"];

    /**
     * @return array
     */
    protected function getElementos(): array
    {
        return $this->elementos;
    }

    /**
     * @return array
     */
    protected function getNombresAcero(): array
    {
        return $this->nombresAcero;
    }

    /**
     * @return array
     */
    protected function getNombresAgua(): array
    {
        return $this->nombresAgua;
    }

    /**
     * @return array
     */
    protected function getNombresBicho(): array
    {
        return $this->nombresBicho;
    }

    /**
     * @return array
     */
    protected function getNombresDragon(): array
    {
        return $this->nombresDragon;
    }

    /**
     * @return array
     */
    protected function getNombresElectrico(): array
    {
        return $this->nombresElectrico;
    }

    /**
     * @return array
     */
    protected function getNombresFantasma(): array
    {
        return $this->nombresFantasma;
    }

    /**
     * @return array
     */
    protected function getNombresFuego(): array
    {
        return $this->nombresFuego;
    }

    /**
     * @return array
     */
    protected function getNombresHada(): array
    {
        return $this->nombresHada;
    }

    /**
     * @return array
     */
    protected function getNombresHielo(): array
    {
        return $this->nombresHielo;
    }

    /**
     * @return array
     */
    protected function getNombresLucha(): array
    {
        return $this->nombresLucha;
    }

    /**
     * @return array
     */
    protected function getNombresNormal(): array
    {
        return $this->nombresNormal;
    }

    /**
     * @return array
     */
    protected function getNombresPlanta(): array
    {
        return $this->nombresPlanta;
    }

    /**
     * @return array
     */
    protected function getNombresPsiquico(): array
    {
        return $this->nombresPsiquico;
    }

    /**
     * @return array
     */
    protected function getNombresRoca(): array
    {
        return $this->nombresRoca;
    }

    /**
     * @return array
     */
    protected function getNombresSiniestro(): array
    {
        return $this->nombresSiniestro;
    }

    /**
     * @return array
     */
    protected function getNombresTierra(): array
    {
        return $this->nombresTierra;
    }

    /**
     * @return array
     */
    protected function getNombresVeneno(): array
    {
        return $this->nombresVeneno;
    }

    /**
     * @return array
     */
    protected function getNombresVolador(): array
    {
        return $this->nombresVolador;
    }

    /**
     * @return array
     */
    protected function getMovimientosAgua(): array
    {
        return $this->movimientosAgua;
    }

    /**
     * @return array
     */
    protected function getMovimientosAcero(): array
    {
        return $this->movimientosAcero;
    }

    /**
     * @return array
     */
    protected function getMovimientosBicho(): array
    {
        return $this->movimientosBicho;
    }

    /**
     * @return array
     */
    protected function getMovimientosDragon(): array
    {
        return $this->movimientosDragon;
    }

    /**
     * @return array
     */
    protected function getMovimientosElectrico(): array
    {
        return $this->movimientosElectrico;
    }

    /**
     * @return array
     */
    protected function getMovimientosFantasma(): array
    {
        return $this->movimientosFantasma;
    }

    /**
     * @return array
     */
    protected function getMovimientosFuego(): array
    {
        return $this->movimientosFuego;
    }

    /**
     * @return array
     */
    protected function getMovimientosHada(): array
    {
        return $this->movimientosHada;
    }

    /**
     * @return array
     */
    protected function getMovimientosHielo(): array
    {
        return $this->movimientosHielo;
    }

    /**
     * @return array
     */
    protected function getMovimientosLucha(): array
    {
        return $this->movimientosLucha;
    }

    /**
     * @return array
     */
    protected function getMovimientosNormal(): array
    {
        return $this->movimientosNormal;
    }

    /**
     * @return array
     */
    protected function getMovimientosPlanta(): array
    {
        return $this->movimientosPlanta;
    }

    /**
     * @return array
     */
    protected function getMovimientosPsiquico(): array
    {
        return $this->movimientosPsiquico;
    }

    /**
     * @return array
     */
    protected function getMovimientosRoca(): array
    {
        return $this->movimientosRoca;
    }

    /**
     * @return array
     */
    protected function getMovimientosSiniestro(): array
    {
        return $this->movimientosSiniestro;
    }

    /**
     * @return array
     */
    protected function getMovimientosTierra(): array
    {
        return $this->movimientosTierra;
    }

    /**
     * @return array
     */
    protected function getMovimientosVeneno(): array
    {
        return $this->movimientosVeneno;
    }

    /**
     * @return array
     */
    protected function getMovimientosVolador(): array
    {
        return $this->movimientosVolador;
    }


    public function rndMovimiento(): string{
        $movimientos = [$this->movimientosAcero,$this->movimientosAgua,$this->movimientosBicho,$this->movimientosDragon,$this->movimientosElectrico,$this->movimientosFantasma,$this->movimientosFuego,$this->movimientosHada,$this->movimientosHielo,$this->movimientosLucha,$this->movimientosNormal,$this->movimientosPlanta,$this->movimientosPsiquico,$this->movimientosRoca,$this->movimientosSiniestro,$this->movimientosTierra,$this->movimientosVeneno,$this->movimientosVolador];
        $moviento = $movimientos[array_rand($movimientos)];

        return $moviento[array_rand($moviento)];
    }

    public function rndNombre(): string{
        $nombres = [$this->nombresAcero,$this->nombresAgua,$this->nombresBicho,$this->nombresDragon,$this->nombresElectrico,$this->nombresFantasma,$this->nombresFuego,$this->nombresHada,$this->nombresHielo,$this->nombresLucha,$this->nombresNormal,$this->nombresPlanta,$this->nombresPsiquico,$this->nombresRoca,$this->nombresSiniestro,$this->nombresTierra,$this->nombresVeneno,$this->nombresVolador];
        $nombre = $nombres[array_rand($nombres)];
        return $nombre[array_rand($nombre)];
    }
    public function rndElemento(): string{
        return $this->elementos[array_rand($this->elementos)];
    }


}
