export default {
    state: {
        menu: [
            {label:"Dashboard", to:"/admin"},
            // {label:"Páginas", children:[
            //     {label:"Buscar", to:"/admin/pages", children:[]},
            //     {label:"Novo", to:"/admin/pages/new", children:[]},
            // ]},
            {label:"Usuários", children:[
                {label:"Buscar", to:"/admin/user", children:[]},
                {label:"Novo", to:"/admin/user/new", children:[]},
            ]},
            {label:"Configurações", to:"/admin/settings", children:[]},
            {label:"Arquivos", children:[
                {label:"Buscar", to:"/admin/files", children:[]},
                {label:"Novo", to:"/admin/files/new", children:[]},
            ]},
            {label:"Life", children:[
                {label:"Mundos", to:"/admin/life-worlds", children:[]},
                {label:"Personagens", to:"/admin/life-persons", children:[]},
                {label:"Interações", to:"/admin/life-persons-interactions", children:[]},
            ]},
            {label:"Meus dados", to:"/admin/user/me"},
        ],

        // userOptions: [
        //     {to:"/admin/users/me", icon:"fas fa-user", label:"Meus dados", children:[]},
        // ],

        // settings: [
        //     {to:"/admin/settings", icon:"fas fa-cog", label:"Sistema", children:[]},
        //     {to:"/admin/settings/email", icon:"fas fa-envelope", label:"E-mail", children:[]},
        //     {to:"/admin/settings/user", icon:"fas fa-user-cog", label:"Usuário", children:[]},
        // ],
    },
}