import './bootstrap';
import { allAboutModals, setDatePicker, comboBox } from './employees/create/modals/addPosDep.js';

import Alpine from 'alpinejs';

document.addEventListener('DOMContentLoaded', () => {
    allAboutModals(
        "addDepartmentModal",
        "openAddDepartmentModal",
        "closeAddDepartmentModal",
        "cancelAddDepartmentModal"
    );
    allAboutModals(
        "addPositionModal",
        "openAddPositionModal",
        "closeAddPositionModal",
        "cancelAddPositionModal"
    );

    setDatePicker();

    
    comboBox("department");
    comboBox("position");
});

window.Alpine = Alpine;

Alpine.start();
