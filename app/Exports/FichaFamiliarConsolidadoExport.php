<?php

namespace App\Exports;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB;

class FichaFamiliarConsolidadoExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function collection()
    {
        //FICHA_FAMILIAR_Y_VISITA_FAMILIAR
        $id_usuario=0;
        $simbolo="";
        if (auth()->user()->is_admin) {
            $id_usuario=0;
            $simbolo=">";
        }else{
            $id_usuario=auth()->user()->id;
            $simbolo="=";
        }
        $obj=DB::table("ficha_familiars")
        ->leftjoin('visita_familiars','visita_familiars.IdFichaFamiliar','=','ficha_familiars.id')
        ->leftjoin('miembros_familiars','miembros_familiars.IdFichaFamiliar','=','ficha_familiars.id')
        ->leftjoin('caracteristica_familiars','caracteristica_familiars.IdFichaFamiliar','=','ficha_familiars.id')
        ->leftjoin('reds','reds.id','=','ficha_familiars.Idred')
        ->leftjoin('microreds','microreds.id','=','ficha_familiars.Idmicrored')
        ->leftjoin('establecimientos','establecimientos.id','=','ficha_familiars.IdEstablecimiento')
        ->leftjoin('provincias','provincias.id','=','ficha_familiars.IdProvincia')
        ->leftjoin('distritos','distritos.id','=','ficha_familiars.IdDistrito')
        ->leftjoin('users','users.id','=','ficha_familiars.Usuario')
        ->select('ficha_familiars.id as ID_FICHA_FAMILIAR',
        'ficha_familiars.Multifamiliar AS CASA_MULTIFAMILIAR',
        'ficha_familiars.Gerencia AS DIRESA',
        'reds.nombre_red AS RED',
        'microreds.nombre_microred AS MICRORED',
        'establecimientos.nombre_establecimiento AS ESTABLECIMIENTO',
        'provincias.nombre_provincia AS PROVINCIA',
        'distritos.nombre_distrito AS DISTRITO',
        //FICHA PRINCIPAL
        'ficha_familiars.Localidad AS LOCALIDAD',
        'ficha_familiars.Sector AS SECTOR',
        'ficha_familiars.Arearesidencia AS AREA_RESI.',
        'ficha_familiars.Telefonocelular AS TEL.CELULAR',
        'ficha_familiars.Direccionvivienda AS DIR.VIVIENDA',
        'ficha_familiars.TelefoOtrapersona AS TEL.OTRA_PERSONA',
        'ficha_familiars.TiempoEESSCercano AS TIEMPO_EESS_CERCANO',
        'ficha_familiars.MedioTransporte AS MEDIO_TRANSPORTE',
        'ficha_familiars.TiempoResidencia AS TIEMPO_RESI',
        'ficha_familiars.ResidenciasAnteriores AS RESIDENCIA_ANTERIORES',
        'ficha_familiars.DisponibilidadProximasVisitas AS DISP.PROX.VISITAS',
        'ficha_familiars.CorreoElectronico AS CORREO',
        'ficha_familiars.Referencia AS REFERENCIA',
        'ficha_familiars.FechaUltimoRociadoResidual AS FECH.ULTIMO_ROCIADO_RES.',
        'ficha_familiars.Ninos AS NIÑOS',
        'ficha_familiars.Adolescentes AS ADOLESCENTE',
        'ficha_familiars.Jovenes AS JOVENES',
        'ficha_familiars.Adultos AS ADULTOS',
        'ficha_familiars.AdultosMayores AS ADULTOS_MAYORES',
        'ficha_familiars.EtniaRaza AS ETNIA_RAZA',
        'ficha_familiars.IdiomaPredominante AS IDIOMA_PRED.',
        'ficha_familiars.Religion AS RELIGION',
        //VISITAS
        'visita_familiars.FechaVisita AS FECHA_VISITA',
        'visita_familiars.ResponsableVisita AS RESPONSABLE_VISITA',
        'visita_familiars.ResultadoVisita AS RESULTADO_VISITA',
        'visita_familiars.ProximaVisita AS PROXIMA_VISITA',
        //MIEMBROS
        'miembros_familiars.Nombres AS NOMBRES',
        'miembros_familiars.Apellidos AS APELLIDOS',
        'miembros_familiars.Edad AS EDAD',
        'miembros_familiars.TipoEdad AS TIPO_EDAD',
        'miembros_familiars.Sexo AS SEXO',
        'miembros_familiars.NumeroDocumento AS NUMERO_DOCUMENTO',
        'miembros_familiars.TipoDocumento AS TIPO_DOCUMENTO',
        'miembros_familiars.FechaNacimiento AS FECHA_NACIMIENTO',
        'miembros_familiars.Parentesco AS PARENTESCO',
        'miembros_familiars.EstadoCivil AS ESTADO_CIVIL',
        'miembros_familiars.GradoInstruccion AS GRADO_INSTRUCCION',
        'miembros_familiars.Ocupacion AS OCUPACION',
        'miembros_familiars.CondicionOcupacion AS CONDICION_OCUPACION',
        'miembros_familiars.SeguroSalud AS SEGURO_SALUD',
        //CARACTERISTICAS
        'caracteristica_familiars.IngresoMensual AS INGRESO_MENSUAL',
        'caracteristica_familiars.AguaTratamiento AS AGUA_TRATAMIENTO',
        'caracteristica_familiars.AguaSinTratamiento AS AGUA_SINTRATAMIENTO',
        'caracteristica_familiars.RedPublicaDentro AS RED_PUBLICADENTRO',
        'caracteristica_familiars.RedPublicaFuera AS RED_PUBLICAFUERA',
        'caracteristica_familiars.PozoCisterna AS POZO_CISTERNA',
        'caracteristica_familiars.RioAcequia AS RIO_ACEQUIA',
        'caracteristica_familiars.PisoMadera AS PISO_MADERA',
        'caracteristica_familiars.PisoParquet AS PISO_PARQUET',
        'caracteristica_familiars.PisoLosetas AS PISO_LOSETAS',
        'caracteristica_familiars.PisoCementLadrillo AS PISO_CEMENTLADRILLO',
        'caracteristica_familiars.PisoTierra AS PISO_TIERRA',
        'caracteristica_familiars.PisoOtros AS PISO_OTROS',
        'caracteristica_familiars.CombustibleLena AS COMBUSTIBLE_LENA',
        'caracteristica_familiars.CombustibleCarbon AS COMBUSTIBLE_CARBON',
        'caracteristica_familiars.CombustibleBosta AS COMBUSTIBLE_BOSTA',
        'caracteristica_familiars.CombustibleGasElectricidad AS COMBUSTIBLE_GASELECTRICIDAD',
        'caracteristica_familiars.PersonasHabitacion3Miembros AS PERSONAS_HABITACION3MIEMBROS',
        'caracteristica_familiars.PersonasHabitacion4Mas AS PERSONAS_HABITACION4MAS',
        'caracteristica_familiars.PersonasHabitacion4MasNumero AS PERSONAS_HABITACION4MASNUMERO',
        'caracteristica_familiars.PersonasHabitacion3MiembroNumero AS PERSONAS_HABITACION3MIEMBRONUMERO',
        'caracteristica_familiars.ParedMaderaEstera AS PARED_MADERAESTERA',
        'caracteristica_familiars.ParedAdobeTapia AS PARED_ADOBETAPIA',
        'caracteristica_familiars.ParedCementoLadrillo AS PARED_CEMENTOLADRILLO',
        'caracteristica_familiars.ParedQuincha AS PARED_QUINCHA',
        'caracteristica_familiars.ParedOtros AS PARED_OTROS',
        'caracteristica_familiars.ConseAlimTemperaturaAmbiente AS CONSE_ALIMTEMPERATURAAMBIENTE',
        'caracteristica_familiars.ConseAlimRefrigeradora AS CONSE_ALIMREFRIGERADORA',
        'caracteristica_familiars.ConseAlimRecipienteConTapa AS CONSE_ALIMRECIPIENTECONTAPA',
        'caracteristica_familiars.ConseAlimRecipienteSinTapa AS CONSE_ALIMRECIPIENTESINTAPA',
        'caracteristica_familiars.TransporteAutomovil AS TRANSPORTE_AUTOMOVIL',
        'caracteristica_familiars.TransporteBicicleta AS TRANSPORTE_BICICLETA',
        'caracteristica_familiars.TransporteMotoBicicleta AS TRANSPORTE_MOTOBICICLETA',
        'caracteristica_familiars.TransporteOtros AS TRANSPORTE_OTROS',
        'caracteristica_familiars.TechoCalamina AS TECHO_CALAMINA',
        'caracteristica_familiars.TechoMaderaTeja AS TECHO_MADERATEJA',
        'caracteristica_familiars.TechoNoble AS TECHO_NOBLE',
        'caracteristica_familiars.TechoEthernit AS TECHO_ETHERNIT',
        'caracteristica_familiars.TechoPajasHojas AS TECHO_PAJASHOJAS',
        'caracteristica_familiars.TechoCanaEstera AS TECHO_CANAESTERA',
        'caracteristica_familiars.ExcretasAireLibre AS EXCRETA_SAIRELIBRE',
        'caracteristica_familiars.ExcretasAcequiaCanal AS EXCRETA_SACEQUIACANAL',
        'caracteristica_familiars.ExcretasRedPublica AS EXCRETA_SREDPUBLICA',
        'caracteristica_familiars.ExcretasLetrina AS EXCRETAS_LETRINA',
        'caracteristica_familiars.ExcretasPozoSeptico AS EXCRETAS_POZOSEPTICO',
        'caracteristica_familiars.ExcretasOtros AS EXCRETAS_OTROS',
        'caracteristica_familiars.BasuraCarroRecolector AS BASURA_CARRORECOLECTOR',
        'caracteristica_familiars.BasuraCampoAbierto AS BASURA_CAMPOABIERTO',
        'caracteristica_familiars.BasuraRio AS BASURA_RIO',
        'caracteristica_familiars.BasuraEntierraQuema AS BASURA_ENTIERRAQUEMA',
        'caracteristica_familiars.BasuraPozo AS BASURA_POZO',
        'caracteristica_familiars.BasuraOtros AS BASURA_OTROS',
        'caracteristica_familiars.ServDomicilioTelefono AS SERV_DOMICILIOTELEFONO',
        'caracteristica_familiars.ServDomicilioInternet AS SERV_DOMICILIOINTERNET',
        'caracteristica_familiars.ServDomicilioCable AS SERV_DOMICILIOCABLE',
        'caracteristica_familiars.ServDomicilioElectricidad AS SERV_DOMICILIOELECTRICIDAD',
        'caracteristica_familiars.ServDomicilioAgua AS SERV_DOMICILIOAGUA',
        'caracteristica_familiars.ServDomicilioDesague AS SERV_DOMICILIODESAGUE',
        'caracteristica_familiars.RiesgoLluviasInundaciones AS RIESGO_LLUVIASINUNDACIONES',
        'caracteristica_familiars.RiesgoBasuraJuntoVivienda AS RIESGO_BASURAJUNTOVIVIENDA',
        'caracteristica_familiars.RiesgoInserviblesJuntoVivienda AS RIESGO_INSERVIBLESJUNTOVIVIENDA',
        'caracteristica_familiars.RiesgoHumosVaporesFabricas AS RIESGO_HUMOSVAPORESFABRICAS',
        'caracteristica_familiars.RiesgoDerrumbesHuaycos AS RIESGO_DERRUMBESHUAYCOS',
        'caracteristica_familiars.RiesgoPandillajeDelincuencia AS RIESGO_PANDILLAJEDELINCUENCIA',
        'caracteristica_familiars.RiesgoAlcoholismoDrogadiccion AS RIESGO_ALCOHOLISMODROGADICCION',
        'caracteristica_familiars.RiesgoSinAlumbradoPublico AS RIESGO_SINALUMBRADOPUBLICO',
        'caracteristica_familiars.RiesgoPistasNoAsfaltadas AS RIESGO_PISTASNOASFALTADAS',
        'caracteristica_familiars.RiesgoVectores AS RIESGO_VECTORES',
        'caracteristica_familiars.RiesgoOtros AS RIESGO_OTROS',
        'caracteristica_familiars.AnimalPerroGato AS ANIMAL_PERROGATO',
        'caracteristica_familiars.AnimalCabrasCarneros AS ANIMAL_CABRASCARNEROS',
        'caracteristica_familiars.AnimalConvive AS ANIMAL_CONVIVE',
        'caracteristica_familiars.AnimalPerroGatoVacuna AS ANIMAL_PERROGATOVACUNA',
        'caracteristica_familiars.AnimalCabrasCarnerosVacuna AS ANIMAL_CABRASCARNEROSVACUNA',
        'caracteristica_familiars.AnimalConviveVacuna AS ANIMAL_CONVIVEVACUNA',
        'caracteristica_familiars.ViviendasInfraRiesgo AS VIVIENDAS_INFRARIESGO',
        'caracteristica_familiars.ViviendasInfraRiesgoDescribir AS VIVIENDAS_INFRARIESGODESCRIBIR',
        'caracteristica_familiars.ViviendaPresenciaVectores AS VIVIENDA_PRESENCIAVECTORES',
        'caracteristica_familiars.ViviendaPresenciaVectoresDescribir AS VIVIENDA_PRESENCIAVECTORESDESCRIBIR',
        'caracteristica_familiars.MochilaEmergencia AS MOCHILA_EMERGENCIA',
        'caracteristica_familiars.BotiquinEmergencia AS BOTIQUIN_EMERGENCIA',
        'caracteristica_familiars.ViviendaEspacioAlimentos AS VIVIENDA_ESPACIOALIMENTOS',
        'caracteristica_familiars.CocinaVentilacionHumo AS COCINA_VENTILACIONHUMO',
        'caracteristica_familiars.Television AS TELEVISION',
        'caracteristica_familiars.Radio AS RADIO',
        'caracteristica_familiars.TelevisionPorque AS TELEVISION_PORQUE',
        'caracteristica_familiars.RadioPorque AS RADIO_PORQUE',

        'users.name AS USUARIO',
        )
        ->where('users.id',$simbolo,$id_usuario)
        ->where('ficha_familiars.delete','=',0)

        ->get();
        return ($obj);
    }
    
    public function headings(): array
    {
        return [
        'ID_FICHA_FAMILIAR',
        'CASA_MULTIFAMILIAR',
        'DIRESA',
        'RED',
        'MICRORED',
        'ESTABLECIMIENTO',
        'PROVINCIA',
        'DISTRITO',
        'LOCALIDAD',
        'SECTOR',
        'AREA_RESI.',
        'TEL.CELULAR',
        'DIR.VIVIENDA',
        'TEL.OTRA_PERSONA',
        'TIEMPO_EESS_CERCANO',
        'MEDIO_TRANSPORTE',
        'TIEMPO_RESI',
        'RESIDENCIA_ANTERIORES',
        'DISP.PROX.VISITAS',
        'CORREO',
        'REFERENCIA',
        'FECH.ULTIMO_ROCIADO_RES.',
        'NIÑOS',
        'ADOLESCENTE',
        'JOVENES',
        'ADULTOS',
        'ADULTOS_MAYORES',
        'ETNIA_RAZA',
        'IDIOMA_PRED.',
        'RELIGION',
        //VISITAS
        'FECHA_VISITA',
        'RESPONSABLE_VISITA',
        'RESULTADO_VISITA',
        'PROXIMA_VISITA',
        
        //MIEMBROS
        'NOMBRES',
        'APELLIDOS',
        'EDAD',
        'TIPO_EDAD',
        'SEXO',
        'NUMERO_DOCUMENTO',
        'TIPO_DOCUMENTO',
        'FECHA_NACIMIENTO',
        'PARENTESCO',
        'ESTADO_CIVIL',
        'GRADO_INSTRUCCION',
        'OCUPACION',
        'CONDICION_OCUPACION',
        'SEGURO_SALUD',

        //CARACTERÍSTICAS
        'INGRESO_MENSUAL',
        'AGUA_TRATAMIENTO',
        'AGUA_SINTRATAMIENTO',
        'RED_PUBLICADENTRO',
        'RED_PUBLICAFUERA',
        'POZO_CISTERNA',
        'RIO_ACEQUIA',
        'PISO_MADERA',
        'PISO_PARQUET',
        'PISO_LOSETAS',
        'PISO_CEMENTLADRILLO',
        'PISO_TIERRA',
        'PISO_OTROS',
        'COMBUSTIBLE_LENA',
        'COMBUSTIBLE_CARBON',
        'COMBUSTIBLE_BOSTA',
        'COMBUSTIBLE_GASELECTRICIDAD',
        'PERSONAS_HABITACION3MIEMBROS',
        'PERSONAS_HABITACION4MAS',
        'PERSONAS_HABITACION4MASNUMERO',
        'PERSONAS_HABITACION3MIEMBRONUMERO',
        'PARED_MADERAESTERA',
        'PARED_ADOBETAPIA',
        'PARED_CEMENTOLADRILLO',
        'PARED_QUINCHA',
        'PARED_OTROS',
        'CONSE_ALIMTEMPERATURAAMBIENTE',
        'CONSE_ALIMREFRIGERADORA',
        'CONSE_ALIMRECIPIENTECONTAPA',
        'CONSE_ALIMRECIPIENTESINTAPA',
        'TRANSPORTE_AUTOMOVIL',
        'TRANSPORTE_BICICLETA',
        'TRANSPORTE_MOTOBICICLETA',
        'TRANSPORTE_OTROS',
        'TECHO_CALAMINA',
        'TECHO_MADERATEJA',
        'TECHO_NOBLE',
        'TECHO_ETHERNIT',
        'TECHO_PAJASHOJAS',
        'TECHO_CANAESTERA',
        'EXCRETA_SAIRELIBRE',
        'EXCRETA_SACEQUIACANAL',
        'EXCRETA_SREDPUBLICA',
        'EXCRETAS_LETRINA',
        'EXCRETAS_POZOSEPTICO',
        'EXCRETAS_OTROS',
        'BASURA_CARRORECOLECTOR',
        'BASURA_CAMPOABIERTO',
        'BASURA_RIO',
        'BASURA_ENTIERRAQUEMA',
        'BASURA_POZO',
        'BASURA_OTROS',
        'SERV_DOMICILIOTELEFONO',
        'SERV_DOMICILIOINTERNET',
        'SERV_DOMICILIOCABLE',
        'SERV_DOMICILIOELECTRICIDAD',
        'SERV_DOMICILIOAGUA',
        'SERV_DOMICILIODESAGUE',
        'RIESGO_LLUVIASINUNDACIONES',
        'RIESGO_BASURAJUNTOVIVIENDA',
        'RIESGO_INSERVIBLESJUNTOVIVIENDA',
        'RIESGO_HUMOSVAPORESFABRICAS',
        'RIESGO_DERRUMBESHUAYCOS',
        'RIESGO_PANDILLAJEDELINCUENCIA',
        'RIESGO_ALCOHOLISMODROGADICCION',
        'RIESGO_SINALUMBRADOPUBLICO',
        'RIESGO_PISTASNOASFALTADAS',
        'RIESGO_VECTORES',
        'RIESGO_OTROS',
        'ANIMAL_PERROGATO',
        'ANIMAL_CABRASCARNEROS',
        'ANIMAL_CONVIVE',
        'ANIMAL_PERROGATOVACUNA',
        'ANIMAL_CABRASCARNEROSVACUNA',
        'ANIMAL_CONVIVEVACUNA',
        'VIVIENDAS_INFRARIESGO',
        'VIVIENDAS_INFRARIESGODESCRIBIR',
        'VIVIENDA_PRESENCIAVECTORES',
        'VIVIENDA_PRESENCIAVECTORESDESCRIBIR',
        'MOCHILA_EMERGENCIA',
        'BOTIQUIN_EMERGENCIA',
        'VIVIENDA_ESPACIOALIMENTOS',
        'COCINA_VENTILACIONHUMO',
        'TELEVISION',
        'RADIO',
        'TELEVISION_PORQUE',
        'RADIO_PORQUE',


        'USUARIO',
       ];
    }
    
}
