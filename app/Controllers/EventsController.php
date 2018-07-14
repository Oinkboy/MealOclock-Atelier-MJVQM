<?php

namespace MealOclock\Controllers;

use MealOclock\Models\EventsModel;
use MealOclock\Models\PagesModel;

class EventsController extends CoreController
{
    public function all()
    {
        $array_vars_view = [];
        $array_vars_view['array_eventsModel'] = EventsModel::findAll();
        $array_vars_view['array_pagesModel'] = PagesModel::findAll();
        $this->show('events', $array_vars_view);
    }
}
