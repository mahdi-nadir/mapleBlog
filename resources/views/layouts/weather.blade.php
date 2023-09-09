<template id="weatherTemplate" style="display: none;">
    <h1 class="text-xl md:text-3xl uppercase text-center mb-2 mt-2 font-bold underline">Weather</h1>
    <div class="mt-4 text-center mx-auto text-md md:text-xl">
        <label class="font-bold italic text-slate-600" for="place">Select a place</label><br>
        <select name="place" id="place" class="rounded bg-slate-100 border-red-800 border-4 mt-4 text-left">
            <option value="">Select..</option>
                <optgroup label="Ontario">
                    <option value="ottawa">Ottawa</option>
                    <option value="toronto">Toronto</option>
                    <option value="mississauga">Mississauga</option>
                    <option value="hamilton">Hamilton</option>
                    <option value="london">London</option>
                    <option value="windsor">Windsor</option>
                    <option value="kitchener">Kitchener</option>
                    <option value="waterloo">Waterloo</option>
                    <option value="niagara falls">Niagara Falls</option>
                    <option value="kingston">Kingston</option>
                    <option value="cornwall">Cornwall</option>
                    <option value="brampton">Brampton</option>
                    <option value="sudbury">Sudbury</option>
                    <!-- <option value="thunder bay">Thunder Bay</option>
                    <option value="sault ste. marie">Sault Ste. Marie</option>
                    <option value="timmins">Timmins</option>
                    <option value="north bay">North Bay</option>
                    <option value="belleville">Belleville</option>
                    <option value="peterborough">Peterborough</option>
                    <option value="barrie">Barrie</option>
                    <option value="guelph">Guelph</option>
                    <option value="st. catharines">St. Catharines</option>
                    <option value="oshawa">Oshawa</option>
                    <option value="sarnia">Sarnia</option> -->
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="Quebec">
                    <option value="montreal">Montreal</option>
                    <option value="quebec city">Quebec City</option>
                    <option value="laval">Laval</option>
                    <option value="trois-rivieres">Trois-Rivières</option>
                    <option value="drummondville">Drummondville</option>
                    <option value="sherbrooke">Sherbrooke</option>
                    <option value="saguenay">Saguenay</option>
                    <option value="gatineau">Gatineau</option>
                    <option value="saint-jean-sur-richelieu">Saint-Jean-sur-Richelieu</option>
                    <option value="saint-hyacinthe">Saint-Hyacinthe</option>
                    <option value="shawinigan">Shawinigan</option>
                    <option value="rimouski">Rimouski</option>
                    <option value="longueuil">Longueuil</option>
                    <!-- <option value="granby">Granby</option>
                    <option value="saint-jerome">Saint-Jérôme</option>
                    <option value="chicoutimi">Chicoutimi</option>
                    <option value="saint-georges">Saint-Georges</option>
                    <option value="val-d'or">Val-d'Or</option>
                    <option value="sorel-tracy">Sorel-Tracy</option>
                    <option value="joliette">Joliette</option>
                    <option value="salaberry-de-valleyfield">Salaberry-de-Valleyfield</option>
                    <option value="alma">Alma</option>
                    <option value="baie-comeau">Baie-Comeau</option> -->
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="British Columbia">
                    <option value="vancouver">Vancouver</option>
                    <option value="victoria">Victoria</option>
                    <option value="kelowna">Kelowna</option>
                    <option value="abbotsford">Abbotsford</option>
                    <option value="nanaimo">Nanaimo</option>
                    <option value="kamloops">Kamloops</option>
                    <option value="prince george">Prince George</option>
                    <option value="chilliwack">Chilliwack</option>
                    <option value="vernon">Vernon</option>
                    <option value="courtenay">Courtenay</option>
                    <option value="penticton">Penticton</option>
                    <option value="duncan">Duncan</option>
                    <option value="campbell river">Campbell River</option>
                    <!-- <option value="parksville">Parksville</option>
                    <option value="port alberni">Port Alberni</option>
                    <option value="williams lake">Williams Lake</option>
                    <option value="powell river">Powell River</option>
                    <option value="nelson">Nelson</option>
                    <option value="prince rupert">Prince Rupert</option> -->
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="Alberta">
                    <option value="calgary">Calgary</option>
                    <option value="edmonton">Edmonton</option>
                    <option value="lethbridge">Lethbridge</option>
                    <option value="red deer">Red Deer</option>
                    <option value="medicine hat">Medicine Hat</option>
                    <option value="cold lake">Cold Lake</option>
                    <option value="banff">Banff</option>
                    <option value="canmore">Canmore</option>
                    <option value="grande prairie">Grande Prairie</option>
                    <option value="jasper">Jasper</option>
                    <option value="fort mcmurray">Fort McMurray</option>
                    <option value="brooks">Brooks</option>
                    <option value="camrose">Camrose</option>
                    <!-- <option value="lloydminster">Lloydminster</option>
                    <option value="wood buffalo">Wood Buffalo</option>
                    <option value="red deer county">Red Deer County</option>
                    <option value="strathcona county">Strathcona County</option>
                    <option value="st. albert">St. Albert</option>
                    <option value="fort saskatchewan">Fort Saskatchewan</option>
                    <option value="lethbridge county">Lethbridge County</option> -->
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="Manitoba">
                    <option value="winnipeg">Winnipeg</option>
                    <option value="brandon">Brandon</option>
                    <option value="thompson">Thompson</option>
                    <option value="portage la prairie">Portage la Prairie</option>
                    <option value="dauphin">Dauphin</option>
                    <option value="the pas">The Pas</option>
                    <option value="selkirk">Selkirk</option>
                    <option value="steinbach">Steinbach</option>
                    <option value="winkler">Winkler</option>
                    <option value="morden">Morden</option>
                    <option value="flin flon">Flin Flon</option>
                    <option value="swan river">Swan River</option>
                    <option value="thompson">Thompson</option>
                    <!-- <option value="norway house">Norway House</option>
                    <option value="gimli">Gimli</option> -->
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="Nova Scotia">
                    <option value="halifax">Halifax</option>
                    <option value="sydney">Sydney</option>
                    <option value="truro">Truro</option>
                    <option value="new glasgow">New Glasgow</option>
                    <option value="bridgewater">Bridgewater</option>
                    <option value="yarmouth">Yarmouth</option>
                    <option value="kentville">Kentville</option>
                    <option value="amherst">Amherst</option>
                    <option value="new minas">New Minas</option>
                    <option value="antigonish">Antigonish</option>
                    <option value="wolfville">Wolfville</option>
                    <option value="westville">Westville</option>
                    <option value="pictou">Pictou</option>
                    <option value="windsor">Windsor</option>
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="New Brunswick">
                    <option value="saint john">Saint John</option>
                    <option value="fredericton">Fredericton</option>
                    <option value="moncton">Moncton</option>
                    <option value="bathurst">Bathurst</option>
                    <option value="edmundston">Edmundston</option>
                    <option value="campbellton">Campbellton</option>
                    <option value="miramichi">Miramichi</option>
                    <option value="dieppe">Dieppe</option>
                    <option value="shediac">Shediac</option>
                    <option value="rothesay">Rothesay</option>
                    <option value="oromocto">Oromocto</option>
                    <option value="grand falls">Grand Falls</option>
                    <option value="dalhousie">Dalhousie</option>
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="Saskatchewan">
                    <option value="saskatoon">Saskatoon</option>
                    <option value="regina">Regina</option>
                    <option value="prince albert">Prince Albert</option>
                    <option value="melfort">Melfort</option>
                    <option value="north battleford">North Battleford</option>
                    <option value="swift current">Swift Current</option>
                    <option value="lloydminster">Lloydminster</option>
                    <option value="estevan">Estevan</option>
                    <option value="weyburn">Weyburn</option>
                    <option value="moose jaw">Moose Jaw</option>
                    <option value="kindersley">Kindersley</option>
                    <option value="humboldt">Humboldt</option>
                    <option value="la ronge">La Ronge</option>
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="Newfoundland and Labrador">
                    <option value="st. john's">St. John's</option>
                    <option value="corner brook">Corner Brook</option>
                    <option value="grand falls-windsor">Grand Falls-Windsor</option>
                    <option value="goose bay">Goose Bay</option>
                    <option value="gander">Gander</option>
                    <option value="stephenville">Stephenville</option>
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="Prince Edward Island">
                    <option value="charlottetown">Charlottetown</option>
                    <option value="summerside">Summerside</option>
                    <option value="montague">Montague</option>
                    <option value="souris">Souris</option>
                    <option value="alberton">Alberton</option>
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="Yukon">
                    <option value="whitehorse">Whitehorse</option>
                    <option value="dawson">Dawson</option>
                    <option value="marsh lake">Marsh Lake</option>
                    <option value="mayo">Mayo</option>
                    <option value="carcross">Carcross</option>
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="Northwest Territories">
                    <option value="yellowknife">Yellowknife</option>
                    <option value="hay river">Hay River</option>
                    <option value="inuvik">Inuvik</option>
                    <option value="fort smith">Fort Smith</option>
                    <option value="norman wells">Norman Wells</option>
                </optgroup>
                <option value="" disabled></option>
                <optgroup label="Nunavut">
                    <option value="iqaluit">Iqaluit</option>
                    <option value="rankin inlet">Rankin Inlet</option>
                    <option value="arviat">Arviat</option>
                    <option value="baker lake">Baker Lake</option>
                    <option value="cambridge bay">Cambridge Bay</option>
                </optgroup>
        </select>
    </div>
    <button id="getWeather" class="font-bold bg-blue-500 text-white px-5 py-2 rounded-lg mt-4 text-lg md:text-2xl block mx-auto" disabled>Check</button>
    <h1 id="result" class="text-md md:text-2xl text-center mt-4">
        <!-- <h1 class="font-bold text-5xl text-center my-3" id="degree"></h1> -->
    </h1> 
</template>