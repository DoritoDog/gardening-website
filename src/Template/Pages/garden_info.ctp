<?php

echo $this->element('info_view', [
    'title' => 'Aké údaje o záhrade potrebujeme',
    'list' => [
      'Orientácia na svetové strany.',
      'Aká je výška budov v okolí záhrady (najlepšie je poslať fotografie do emailu).',
      'Preferencie na dizajn - páči sa Vám moderná záhrada s rovnými líniami, vidiecka alebo provensálska či japonská?',
      'Farebná škála - to je takisto dôležité. Preferujete farby tón v tóne alebo veľa farieb a kvetov?',
      'Záhradná údržba - jednoduchá záhrada na údržbu (maximálne strihanie a kosenie trávnika) alebo kvetinové záhony a vodný prvok, prípadne relaxačná funkcia záhrady ako obývací priestor vonku.',
      'Aké typy kvetov a drevín sa Vám najviac páčia? Niekto preferuje stálu zeleň v podobe ihličnanov, iný má rád neustálu premenu záhrady.'
    ]
]);
