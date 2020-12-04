function ajouter_doctor()
{
var cin=formajoutdoctor.Cin
var Nom=formajoutdoctor.Nom;
// var ePass=formajoutdoctor.ePass;
var Prenom=formajoutdoctor.Prenom;
var Specialite=formajoutdoctor.Specialite;
var Pass=formajoutdoctor.Pass;
var Salaire=formajoutdoctor.Salaire;

var verif=-1;
if(cin.value.length==0)
{alert('La CIN est obligatoire');
verif=0;
return false;
}
else verif=1;
if((cin.value.length!=8)&&(cin.value.length!=0))
{alert('La CIN doit comporter 8 chiffres');
verif=0;
return false;
}
else verif=1;



if(testCin(cin)==false)
{alert('La CIN ne doit pas comporter une Lettre');
verif=0;
return false;
}
else verif=1;






if(Nom.value.length==0){
    alert('Le Nom est obligatoire');

    return false;

}
else verif=1;
if(Prenom.value.length==0){
    alert('Le Prenom est obligatoire');

    return false;

}
else verif=1;
if(Specialite.value.length==0){
    alert('La Specialite est obligatoire');

    return false;

}
else verif=1;


if(Pass.value.length!=8)
   { alert('Le Mot de Passe doit comporter 8');

    return false;

}
else verif=1;

if(Salaire.value==0){
    alert('Le Salaire est obligatoire');

    return false;

}else verif=1;









if(verif==1)
{
    alert('Merci Pour l ajout');

return true;
}





}
function testCin(cin){
var k=0;
    for( let i = 0; i<cin.value.length; i++) {

        if((cin.value[i]<=9)||(cin.value[i]>=0))
        k=0;
        else return false;


}}


function testPass(Pass){

        var test=0;
        for(let i = 0; i < Pass.value.length; i++) {
    if(Pass.value[i]=="@")
    {test++;
    
    }}
        for(let i = 0; i < Pass.value.length; i++) {
    if((test==1)&&(Pass.value[i]=="."))
    {if(Pass.value.length>i+1)
        return true;
    }}
    return false;





}

