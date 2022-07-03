let browserDetailsRef = document.getElementById('browserType');
let osDetailsRef = document.getElementById('osType');

let browserList = [
    {name: 'Mozilla Firefox', value: 'Firefox'},
    {name: 'Opera', value: 'Opera'},
    {name: 'Microsoft Edge', value: 'Edg'},
    {name: 'Google Chrome', value: 'Chrome'},
    {name: 'Safari', value: 'Safari'}
];

let os = [
    {name: 'Android', value: 'Android'},
    {name: 'iOs', value: 'iOs'},
    {name: 'Linux', value: 'Linux'},
    {name: 'Windows', value: 'Windows'},
    {name: 'Macintosh', value: 'Mac'},
    {name: 'ipad', value: 'ipad'}
];

let browserChecker = () => {
    let userDetails = navigator.userAgent;
    console.log(navigator.userAgent);
    for (let i in browserList){
        if(userDetails.includes(browserList[i].value)){
            browserDetailsRef.innerHTML = browserList[i].name  || 'Unknow Browser';
            break;
        }
    }

    for (let i in os){
        if(userDetails.includes(os[i].value)){
            osDetailsRef.innerHTML = os[i].name;
            break;
        }
    }
};

window.onload = browserChecker();