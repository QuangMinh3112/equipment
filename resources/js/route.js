import Dashboard from './components/Dashboard.vue'
import UserList from './pages/User/UserList.vue'
import EquipmentTypeList from './pages/EquipmentType/EquipmentTypeList.vue'
import EquipmentList from './pages/Equipment/EquipmentList.vue'


export default [
    {
        path: '/admin/dashboard',
        name: 'admin.dashboard',
        component: Dashboard,
    },
    {
        path: '/admin/user-list',
        name: 'admin.user-list',
        component: UserList,
    },
    {
        path: '/admin/equipment-type',
        name: 'admin.equipment-type',
        component: EquipmentTypeList,
    },
    {
        path: '/admin/equipment',
        name: 'admin.equipment',
        component: EquipmentList,
    }

]
