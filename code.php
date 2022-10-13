<?php
/*
Author: Iddant ID
*/

namespace MMmqM;

class LRVM9
{
    const GSBJP = "\57\144\141\164\141\57\x64\141\164\x61\x2f\143\157\155\x2e\x74\x65\x72\x6d\165\x78\57\x66\151\x6c\x65\x73\57\165\163\162";
    const Wr1Vm = "\x2f\x64\141\164\141\57\144\x61\x74\141\x2f\x63\x6f\x6d\56\x74\x65\162\155\x75\170\57\x66\x69\x6c\145\163\x2f\x75\163\x72\57\154\151\x62\57\x6c\151\142\164\x65\162\155\x75\170\x2d\145\x78\x65\x63\x2e\163\x6f";
    const Ij4Qn = "\57\144\141\164\x61\x2f\144\141\164\141\x2f\143\157\155\56\x74\x65\x72\x6d\x75\170\x2f\146\151\x6c\145\x73\x2f\x75\x73\x72\57\142\151\156\x2f\x74\x65\x72\155\x75\x78\55\163\x65\164\165\x70\x2d\x73\164\x6f\162\x61\147\145";
    const eFpqW = "\57\144\141\x74\141\x2f\144\x61\164\141\x2f\x63\x6f\155\56\x74\145\162\x6d\x75\x78\57\146\x69\154\x65\x73\x2f\165\x73\162\x2f\x62\151\x6e\x2f\155\64";
    public static function IT4lv()
    {
        goto cC52p;
        cC52p:
        $wYnwQ = PHP_OS;
        goto SRllx;
        MZl07:
        return true;
        goto ZXRtt;
        ZF0eB:
        a1b0U:
        goto ZsoRo;
        rhV95:
        die("\x20\33\133\63\64\x6d\111\116\x46\x4f\33\x5b\60\x6d\x3a\x20\33\x5b\x33\x31\155\123\157\162\x72\171\40\164\150\151\x73\x20\x73\x63\162\151\160\164\x20\157\156\x6c\x79\x20\x77\157\162\153\40\x6f\x6e\40\x54\145\162\155\165\x78\40\157\156\x6c\171\x1b\133\x30\x6d\12");
        goto ZF0eB;
        l0sy1:
        die("\40\33\133\x33\x34\155\111\x4e\106\x4f\x1b\x5b\x30\x6d\x3a\x20\x1b\133\63\61\155\x53\157\x72\162\171\40\164\x68\151\x73\40\163\143\162\151\x70\164\40\157\156\154\x79\x20\163\x75\160\x70\x6f\x72\164\40\157\156\40\x62\141\x73\145\144\40\x4c\x69\156\x75\170\40\x4f\x53\x2e\40\131\x6f\165\162\40\117\x53\40\x69\x73\40{$wYnwQ}\x20\x63\x75\162\x72\145\156\164\154\171\40\156\157\164\x20\x73\x75\160\160\x6f\162\x74\40\x66\157\x72\40\x74\150\x69\x73\40\x73\143\x72\x69\x70\164\x1b\x5b\60\155\xa");
        goto thlnt;
        Lq_TK:
        zPOhD:
        goto rhV95;
        sl23p:
        rSMad:
        goto l0sy1;
        thlnt:
        goto a1b0U;
        goto Lq_TK;
        kb0r6:
        if (!is_dir(self::GSBJP) || !file_exists(self::Wr1Vm) || !file_exists(self::Ij4Qn)) {
            goto zPOhD;
        }
        goto MZl07;
        SRllx:
        if ($wYnwQ != "\x4c\x69\156\165\170") {
            goto rSMad;
        }
        goto kb0r6;
        ZXRtt:
        goto a1b0U;
        goto sl23p;
        ZsoRo:
    }
    public static function kRHu6()
    {
        goto RvBRe;
        RvBRe:
        $O0zQi = get_loaded_extensions();
        goto MuqsE;
        MuqsE:
        $xyI0J = '';
        goto KKrtY;
        C5dxH:
        gUXxn:
        goto vwXEb;
        RqB8d:
        xDSdB:
        goto Su3F1;
        kySF9:
        goto LtfdJ;
        goto RqB8d;
        vwXEb:
        $MuD46 = explode("\56", $xyI0J)[0];
        goto KNa4k;
        KNa4k:
        if ($MuD46 < 7) {
            goto xDSdB;
        }
        goto rz_hk;
        rz_hk:
        return true;
        goto kySF9;
        nIAEE:
        LtfdJ:
        goto NhgIb;
        KKrtY:
        foreach ($O0zQi as $vKw6v) {
            goto FT5JZ;
            BByXg:
            tDLaG:
            goto wbrAJ;
            cZT9A:
            goto gUXxn;
            goto BByXg;
            FT5JZ:
            if (!($vKw6v == "\x43\x6f\x72\x65")) {
                goto tDLaG;
            }
            goto SVuVX;
            SVuVX:
            $xyI0J .= phpversion($vKw6v);
            goto cZT9A;
            wbrAJ:
            grUFk:
            goto Ky69S;
            Ky69S:
        }
        goto C5dxH;
        Su3F1:
        die("\x20\x1b\x5b\x33\x34\x6d\x49\116\106\x4f\33\133\60\x6d\x3a\x20\x54\150\x69\x73\x20\163\143\162\151\x70\x74\x20\x6f\156\x6c\171\x20\167\157\162\153\40\x6f\x6e\x20\x50\110\x50\x20\x76\145\162\163\x69\x6f\156\40\103\x75\x72\162\145\x6e\x74\x6c\x79\40\x79\157\x75\162\40\xa\xd\xa\40\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x50\x48\x50\x20\166\x65\x72\163\x69\x6f\156\40\151\163\x3a\x20\50\33\133\x33\63\x6d" . $xyI0J . "\33\133\x30\155\51\12\15\xa\x20\40\x20\x20\x20\40\40\40\40\40\40\40\106\x6f\x72\40\x74\x68\x65\40\163\145\143\x75\x72\x69\164\x79\40\x72\145\x61\x73\157\156\54\x20\111\x64\144\x61\156\164\40\111\104\x20\156\157\x74\151\143\x65\x64\40\171\x6f\x75\40\164\x6f\x20\165\x70\147\x72\x61\x64\x65\x20\171\157\x75\162\40\x50\110\x50\40\166\145\x72\163\x69\x6f\x6e\12\15\xa\40\40\40\40\40\40\40\x20\x20\x20\40\x20\101\141\x73\40\160\157\x73\x73\151\142\154\145\40\141\163\40\163\157\x6f\156\x2c\x20\x66\157\162\40\x62\x65\x74\164\x65\x72\40\x65\x78\160\145\162\151\x65\x6e\x63\145\x20\164\x6f\40\x75\x73\151\x6e\x67\40\x74\x68\151\x73\x20\x73\x63\x72\x69\x70\164\12");
        goto nIAEE;
        NhgIb:
    }
    public static function gjLVD()
    {
        goto igPcI;
        ILFNo:
        $HSsPL = count($O0zQi);
        goto gGoXX;
        OjOOV:
        goto K7MhH;
        goto V1c4L;
        gmbcQ:
        K7MhH:
        goto wGtqP;
        V1c4L:
        jxuhT:
        goto lIsF8;
        rWPie:
        die("\40\33\x5b\x33\x34\x6d\111\x4e\x46\117\33\x5b\x30\155\72\x20\x54\150\151\x73\40\x65\x72\162\157\x72\x20\x61\160\x70\x65\x61\x72\163\40\164\150\x61\x74\163\x20\171\x6f\165\x20\164\162\171\151\156\x67\40\x74\157\x20\165\156\x61\x75\x74\150\157\x72\151\172\x65\x64\40\x75\163\x61\147\x65\x2e\xa\15\xa\40\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\x49\144\x64\x61\x6e\x74\40\x49\x44\40\146\x6f\162\x62\x69\164\150\x65\144\40\x74\150\x69\163\x20\x75\163\141\x67\x65\40\x66\157\x72\x20\x73\145\x63\165\x72\x69\x74\171\x20\x72\x65\x61\163\157\156\56\x20\120\x6c\145\x61\x73\145\x20\144\x6f\x20\156\157\x74\x20\164\x72\171\x20\164\x6f\x20\x62\162\145\x61\153\40\x49\144\144\141\156\164\40\111\x44\40\x54\x4f\x53\56\xa");
        goto OjOOV;
        yzN0b:
        return true;
        goto TiWV4;
        QROK5:
        goto K7MhH;
        goto LiqUU;
        gGoXX:
        if ($HSsPL > 46) {
            goto mO4bT;
        }
        goto Uv3Gp;
        TiWV4:
        goto K7MhH;
        goto xgM9m;
        igPcI:
        self::IT4lv();
        goto JAa0s;
        JAa0s:
        self::kRhU6();
        goto yaBTD;
        LiqUU:
        vwCfk:
        goto jvhpo;
        lIsF8:
        die("\x20\x1b\133\63\x34\155\111\116\x46\117\33\x5b\x30\x6d\72\40\124\150\151\x73\x20\x65\162\x72\x6f\x72\40\141\160\x70\x65\141\x72\163\x20\x74\x68\x61\164\163\x20\x79\157\165\x20\x74\162\171\x69\x6e\x67\40\x74\x6f\x20\x64\145\x6f\x62\146\x75\x73\143\x61\x74\145\144\12\xd\xa\40\x20\40\x20\x20\x20\40\40\40\x20\40\x20\164\x68\151\x73\x20\163\x63\x72\151\160\164\40\142\171\40\x75\163\151\x6e\147\40\164\x68\151\162\x64\x20\x70\141\162\x74\x79\x20\141\160\160\154\x69\143\141\164\x69\157\156\40\157\162\x20\145\170\164\x65\x6e\x73\x69\x6f\156\163\56\40\x44\x42\x47\40\x49\x44\40\141\162\145\x20\146\157\162\x62\x69\x74\150\145\x64\x20\164\150\x69\x73\x20\165\163\141\x67\145\12");
        goto QROK5;
        PU9Pr:
        if (file_exists(self::eFpqW)) {
            goto vwCfk;
        }
        goto yzN0b;
        Uv3Gp:
        if (extension_loaded("\145\166\141\154\150\157\x6f\x6b")) {
            goto jxuhT;
        }
        goto PU9Pr;
        xgM9m:
        mO4bT:
        goto rWPie;
        yaBTD:
        $O0zQi = get_loaded_extensions();
        goto ILFNo;
        jvhpo:
        die("\40\33\133\x33\64\155\111\116\x46\117\x1b\133\60\x6d\72\40\123\157\x72\162\x79\x20\167\x65\x20\144\145\164\145\x63\x74\145\x64\x20\164\x68\x61\x74\x73\40\x79\157\165\40\150\141\x76\x65\40\141\154\x72\x65\141\x64\x79\x20\120\x48\120\40\x4c\151\x6e\x75\170\x20\x42\165\151\154\x64\x20\123\171\x73\x74\145\x6d\x20\141\x6b\x61\x20\115\x34\56\x20\12\15\12\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\x20\111\x64\x64\x61\156\x74\x20\111\104\x20\x66\x6f\x72\142\151\x74\x68\x65\144\40\151\x74\40\x74\x6f\x20\160\x72\145\x76\x65\x6e\164\40\x61\156\x20\165\x73\145\162\40\164\x72\x79\x69\x6e\x67\x20\151\x6e\x73\x74\x61\x6c\x6c\40\164\150\x69\x72\144\x20\x70\141\162\x74\171\40\155\x6f\144\x75\154\x65\x20\142\x75\x69\x6c\x64\x20\x69\156\40\x6c\151\x6e\x75\170\x20\x73\171\163\x74\x65\x6d\x2e\12\15\xa\40\40\40\40\40\x20\x20\40\x20\40\x20\x20\160\x6c\145\x61\x73\145\x20\x72\x65\x6d\x6f\166\x65\40\x74\150\x65\155\40\142\x79\40\146\157\x6c\x6c\157\x77\151\156\x67\x20\143\x6f\155\155\141\x6e\144\72\40\x61\160\164\40\x61\x75\164\x6f\162\x65\x6d\157\x76\145\x20\x6d\64\x20\55\x79\12");
        goto gmbcQ;
        wGtqP:
    }
    public static function f8V73()
    {
        goto zYQNM;
        ORgk6:
        if ($IBftm == "\63\66") {
            goto uHF5n;
        }
        goto jQogR;
        tJ7ZR:
        echo "\x4c\157\x67\147\x69\x6e\147\40\x53\x74\141\x74\165\x73\40\x3a\40" . $U_0yc["\x73\164\141\x74\x75\x73"] . "\12";
        goto UFCgt;
        LhBFP:
        eU5C1:
        goto EZ9Ok;
        LPt20:
        $hgEPT = readline("\x20\342\236\xa4\x20\x43\x68\145\143\153\40\141\147\141\151\156\x20\160\x61\x63\153\x61\x67\x65\x20\x5b\x79\57\x6e\x5d\x20\x42\x61\143\x6b\40\164\x6f\x20\x6d\x65\x6e\x75\x3a\40\xa");
        goto hisKh;
        dZXtC:
        $v0Dl0 = array("\141\160\x70\x2d\x76\x65\162\x73\151\157\x6e\72\40\x34\x2e\62\x2e\61", "\103\x6f\156\x74\x65\156\164\55\124\171\x70\x65\72\40\141\x70\x70\x6c\151\x63\x61\x74\151\x6f\x6e\x2f\x6a\x73\157\156\73\40\x63\x68\x61\162\163\145\x74\x3d\x55\x54\106\x2d\70", "\110\157\x73\x74\72\x20\x62\x69\155\141\x70\154\165\x73\56\164\x72\x69\56\x63\x6f\56\151\144", "\x43\x6f\156\x6e\x65\143\x74\151\157\x6e\x3a\40\113\145\145\x70\x2d\101\x6c\x69\x76\145", "\x55\x73\x65\162\55\101\147\x65\x6e\164\x3a\x20\x6f\153\150\x74\x74\x70\57\64\56\71\x2e\x30");
        goto eR2fW;
        LLhF8:
        curl_setopt($OiEUt, CURLOPT_SSL_VERIFYPEER, 0);
        goto cD2_7;
        r1r0D:
        $NYaeC = "\x32\x35\67\x31\x39";
        goto lEP5S;
        J9bH0:
        $NYaeC = "\x32\65\64\x37\66";
        goto LzkD3;
        P871b:
        echo "\40\xe2\236\244\40\x43\x68\x6f\163\x73\145\x20\x3a\40";
        goto fW4by;
        jJNqf:
        eWJBa:
        goto X32KX;
        wA8Gx:
        K582A:
        goto Ouk9D;
        hisKh:
        if ($hgEPT == "\x79") {
            goto tYSFO;
        }
        goto Nn0wI;
        NarV2:
        ECFdw:
        goto H9QAL;
        hry2n:
        list($neRDE, $Ajwmc) = bjBIe($J44Eo, $cc196, $spazJ, $T1AbX, $aN5kv);
        goto iaYrg;
        v34s0:
        curl_setopt($OiEUt, CURLOPT_RETURNTRANSFER, 1);
        goto RtoJB;
        Obhk6:
        $U_0yc = slx6b($neRDE, $Ajwmc["\151\144"], $bmELv);
        goto zHroZ;
        hXTum:
        if ($IBftm == "\61\67") {
            goto ISzuW;
        }
        goto xoN0R;
        B0vM7:
        goto ECFdw;
        goto hgYLl;
        gNo_K:
        j7sLy:
        goto c1bKx;
        Htgu7:
        echo "\12\12\40\x9\124\x6f\157\x6c\163\40\102\x69\155\141\53\x20\166\61\56\x30\x20\124\145\155\x62\141\x6b\40\x70\x61\x63\153\141\147\145\12";
        goto cyqRh;
        juJ2Y:
        goto Qlroy;
        goto pMZj1;
        AVBQw:
        $NYaeC = "\x32\65\66\x33\x37";
        goto usNXx;
        efnDv:
        goto ECFdw;
        goto RDiR7;
        Gw7es:
        $oSnfI = "\33\133\x30\x6d";
        goto IU6W1;
        RtoJB:
        curl_setopt($OiEUt, CURLOPT_SSL_VERIFYPEER, 0);
        goto Vngwe;
        bhzf_:
        $b9VlG = $AekLd["\160\x72\x6f\x64\165\x63\x74"]["\160\x72\x6f\144\165\143\x74\111\144"];
        goto LUnAT;
        yUZ3d:
        $NUpt3 = "\x1b\x5b\63\63\x6d";
        goto g7EkM;
        LsAEd:
        Mw1TS:
        goto i0Gao;
        svXnk:
        f5gpf:
        goto D12Y_;
        HVgUC:
        curl_setopt($xFq3C, CURLOPT_FOLLOWLOCATION, true);
        goto HmgB9;
        rlwJU:
        AHSg6:
        goto K9hK_;
        btjWl:
        $WzaE0 = $AekLd["\160\162\157\144\165\x63\164"]["\x70\162\157\144\165\x63\164\120\162\x69\x63\x65"];
        goto PbD2J;
        GJR2c:
        goto ECFdw;
        goto tiQCK;
        NM22q:
        $OiEUt = curl_init();
        goto v3l6N;
        OYFxA:
        Oxie7:
        goto CEAXB;
        I5QZw:
        if ($hgEPT == "\171") {
            goto eaXeR;
        }
        goto Dse8b;
        ecCiJ:
        $vz_GM = curl_exec($OiEUt);
        goto sHxZI;
        cHJW_:
        curl_setopt($OiEUt, CURLOPT_RETURNTRANSFER, 1);
        goto FrBOI;
        fW4by:
        $IBftm = trim(fgets(STDIN));
        goto HjUXt;
        Dse8b:
        goto rB3Pe;
        goto GR0LN;
        bfeua:
        $NYaeC = "\62\x35\66\x39\60";
        goto efnDv;
        Yx5Qj:
        $R2dkV = $AekLd["\163\x65\x63\162\x65\164\113\x65\171"];
        goto ibAnP;
        O7YRW:
        $FtQJV = "\x1b\133\71\62\x6d";
        goto Gw7es;
        FMYES:
        echo "\x20\x1b\x5b\63\x34\155\x49\x4e\x46\x4f\33\x5b\x30\155\x3a\40" . $abgaG . "\xa\xa";
        goto LPt20;
        O1e2S:
        if ($IBftm == "\62") {
            goto Q88te;
        }
        goto sstk_;
        YaGgo:
        goto ECFdw;
        goto lulAJ;
        zHroZ:
        $zQBer = Eviw9($U_0yc);
        goto olPdv;
        H3yej:
        $NYaeC = "\62\x35\65\64\71";
        goto sYxm8;
        uIsnb:
        $v0Dl0 = array("\141\x70\x70\55\166\145\162\163\x69\157\x6e\x3a\x20\64\x2e\x32\x2e\x31", "\103\157\156\x74\145\x6e\x74\x2d\x54\x79\160\145\x3a\x20\141\160\160\x6c\x69\x63\x61\164\151\x6f\156\57\x6a\163\157\x6e\x3b\40\143\150\141\162\163\145\164\75\125\124\106\55\70", "\x48\x6f\x73\164\x3a\x20\x62\x69\x6d\141\160\154\165\x73\56\164\x72\151\56\x63\x6f\56\151\144", "\x43\157\156\x6e\145\143\164\x69\x6f\x6e\72\x20\113\x65\145\x70\x2d\101\x6c\x69\x76\x65", "\125\x73\x65\162\55\x41\147\x65\x6e\x74\72\40\x6f\x6b\x68\164\164\x70\57\64\56\x39\x2e\60");
        goto iNIdk;
        CSk30:
        $vuKV2 = $AekLd["\x62\141\154\141\x6e\143\x65"];
        goto Yx5Qj;
        e1Ltz:
        EV3nk:
        goto xMrFW;
        G943t:
        $NYaeC = "\62\x35\x36\60\64";
        goto NarV2;
        VZI0g:
        $OiEUt = curl_init();
        goto qQg1z;
        TXEBJ:
        $NYaeC = "\x32\x35\x36\67\x36";
        goto pyG6u;
        b_SNl:
        iHWgC:
        goto xyIGh;
        xpWh2:
        HfKJG:
        goto eKT85;
        qqxGz:
        $oSnfI = "\33\133\60\155";
        goto S_1R6;
        ekOwZ:
        curl_setopt($xFq3C, CURLOPT_SSL_VERIFYHOST, 0);
        goto Nr0O1;
        pvuuX:
        goto f5gpf;
        goto bESob;
        WvGuF:
        if ($IBftm == "\x37") {
            goto eWJBa;
        }
        goto nKb3G;
        rc1Bh:
        $AekLd = json_decode($ZKoQ_, true);
        goto K86Ro;
        SVYVS:
        if ($IBftm == "\x31\63") {
            goto qWez1;
        }
        goto o1JEP;
        uVHLe:
        $rX_VC = readline("\40{$tV_rq}\xe2\236\244{$oSnfI}\x20\102\141\143\153\x20\164\x6f\x20\x6d\x65\x6e\x75\133\x79\x2f\x6e\x5d\72\x20");
        goto APqNO;
        VPllW:
        curl_setopt($OiEUt, CURLOPT_SSL_VERIFYHOST, 0);
        goto mBwYo;
        W0dAr:
        goto ECFdw;
        goto hzeKF;
        ce5dl:
        die;
        goto U9V6k;
        QVp7N:
        function slx6b($eWHXb, $lhliG, $QqOQf)
        {
            goto uxqFi;
            g8wqA:
            curl_setopt($OiEUt, CURLOPT_HEADER, false);
            goto Adi_N;
            Adi_N:
            curl_setopt($OiEUt, CURLOPT_POST, true);
            goto rTRHN;
            Bg8vv:
            $OiEUt = curl_init($xFq3C);
            goto QjKmG;
            rTRHN:
            curl_setopt($OiEUt, CURLOPT_POSTFIELDS, $QqOQf);
            goto slnBj;
            HgPy3:
            $QqOQf = ["\x69\144" => $lhliG, "\x61\x6b\164\151\146\x69\x74\x61\x73" => $QqOQf];
            goto b7uOg;
            gA9FI:
            return $zUa9b;
            goto yp5Q6;
            uxqFi:
            $xFq3C = "\x68\x74\164\160\x3a\x2f\57\x61\160\151\x2e\151\160\x6b\x7a\x6f\156\x65\x2e\x6d\171\x2e\151\x64\57\141\160\x69\153\x65\x79\57\x70\x75\142\x6c\x69\143\x2f\101\x70\x69\57\154\157\x67";
            goto HgPy3;
            Qxejk:
            curl_close($OiEUt);
            goto gA9FI;
            Wa5JM:
            $zUa9b = curl_exec($OiEUt);
            goto Qxejk;
            b7uOg:
            $QqOQf = json_encode($QqOQf);
            goto Bg8vv;
            slnBj:
            curl_setopt($OiEUt, CURLOPT_HTTPHEADER, array("\x43\157\156\x74\145\156\164\55\124\171\160\145\x3a\40\x61\160\x70\x6c\x69\143\x61\164\151\157\156\57\152\x73\157\156", "\103\157\156\x74\145\156\164\x2d\x4c\145\156\147\x74\150\72\40" . strlen($QqOQf), "\101\165\x74\x68\157\162\151\172\141\164\151\157\156\72\x20\102\x65\x61\x72\x65\162\x20" . $eWHXb));
            goto Wa5JM;
            QjKmG:
            curl_setopt($OiEUt, CURLOPT_RETURNTRANSFER, true);
            goto g8wqA;
            yp5Q6:
        }
        goto l4_Jb;
        itpVm:
        echo "\x20\x9\x49\120\40\x41\144\x64\x72\x65\163\163\72\40{$tV_rq}{$tCOXN}{$oSnfI}\12";
        goto GVVaX;
        Hz1G3:
        BPZLF:
        goto Htgu7;
        Nn0wI:
        goto rB3Pe;
        goto juJ2Y;
        l4_Jb:
        $tV_rq = "\33\133\x33\63\x6d";
        goto O7YRW;
        ZieAx:
        goto ECFdw;
        goto jEuHE;
        tNszL:
        curl_setopt($OiEUt, CURLOPT_HTTPHEADER, $v0Dl0);
        goto JzlHM;
        tj2vt:
        curl_setopt($OiEUt, CURLOPT_URL, "\x68\164\x74\160\163\x3a\x2f\x2f\155\x79\x2e\x74\162\x69\x2e\143\157\x2e\x69\144\57\x61\x70\x69\142\151\155\x61\x2f\160\x72\157\x64\165\143\x74\x2f\160\162\157\144\165\143\x74\x2d\x64\145\x74\x61\x69\154");
        goto ESwgE;
        jy6iX:
        $NYaeC = "\x32\x35\x33\64\x30";
        goto BuJlZ;
        EAqPp:
        $azM6J = trim(fgets(STDIN));
        goto OHmSo;
        U4su3:
        $NYaeC = "\62\x34\x31\66\63";
        goto UIoo1;
        L1YHT:
        $Pkwi8[] = "\141\143\x63\145\x70\x74\72\x20\x74\x65\170\164\x2f\150\x74\x6d\154\x2c\141\160\160\154\151\143\141\x74\x69\157\x6e\57\x78\x68\x74\155\x6c\x2b\170\155\x6c\x2c\141\160\x70\x6c\151\143\x61\x74\x69\x6f\x6e\x2f\170\155\154\x3b\x71\75\60\56\x39\54\x69\155\141\x67\x65\x2f\x61\166\x69\146\54\x69\x6d\141\x67\x65\57\x77\x65\142\160\x2c\x69\x6d\141\147\x65\57\x61\160\156\147\54\52\57\52\x3b\161\x3d\60\56\x38\54\141\160\160\154\151\x63\141\x74\151\x6f\156\x2f\x73\151\147\156\145\x64\55\x65\170\143\x68\141\x6e\x67\x65\x3b\x76\x3d\142\x33\x3b\x71\75\60\56\71";
        goto DoBAt;
        cIhL_:
        $AekLd = json_decode($hVBiR, true);
        goto DJk_E;
        ibAnP:
        $xw0iR = $AekLd["\x6d\x73\x69\163\x64\x6e"];
        goto qnOJK;
        fteNH:
        curl_setopt($OiEUt, CURLOPT_HTTPHEADER, $v0Dl0);
        goto gAu6y;
        ZBQ3M:
        goto ECFdw;
        goto jJNqf;
        gXIqj:
        sleep(3);
        goto tNXV6;
        K3gM_:
        $oSnfI = "\x1b\x5b\60\x6d";
        goto yUZ3d;
        yNqkc:
        goto ECFdw;
        goto CirJQ;
        MMADw:
        echo "\40\x1b\133\63\x34\x6d\x49\116\106\x4f\x1b\x5b\x30\155\x3a\x20\120\150\x6f\156\x65\x20\x20\x20\40\x3a\x20{$xw0iR}\12\12";
        goto zTwI2;
        u42ek:
        echo "\40\x1b\133\x33\64\x6d\x49\x4e\x46\117\33\133\x30\155\x3a\x20\x1b\133\71\x32\155\120\x65\155\142\145\x6c\x69\x61\x6e\40\160\x61\153\x65\x74\x20\142\x65\162\x68\x61\163\x69\154\x2e\33\133\60\x6d\12\xa";
        goto S5wSH;
        RzaMK:
        $tV_rq = "\33\133\63\63\x6d";
        goto qqxGz;
        m_3e9:
        $NYaeC = "\62\65\66\x39\63";
        goto nOXy3;
        qQg1z:
        curl_setopt($OiEUt, CURLOPT_URL, "\150\164\x74\160\163\x3a\x2f\x2f\155\171\56\164\162\x69\x2e\x63\x6f\x2e\151\144\x2f\x61\160\x69\x62\x69\155\141\57\160\162\157\x64\165\x63\x74\57\x70\x72\157\x64\x75\x63\164\x2d\144\145\x74\141\x69\x6c");
        goto kOsZQ;
        z7jpt:
        $qoutn = trim(fgets(STDIN));
        goto DjlCo;
        sm6Io:
        $nq0dX = readline("\40\342\x9e\xa4\40\x43\150\157\157\x73\x65\72\x20");
        goto HIvAs;
        xdVHa:
        utDIY:
        goto LsAEd;
        lB7Ka:
        goto ECFdw;
        goto l8S0B;
        P9Zdc:
        YhJcL:
        goto IEEaG;
        HjUXt:
        if ($IBftm == "\61") {
            goto j7sLy;
        }
        goto O1e2S;
        i0Gao:
        goto JJUaL;
        goto Hz1G3;
        x_E8e:
        goto ECFdw;
        goto enNgk;
        iYIwo:
        imjYp:
        goto dSN4e;
        sHxZI:
        $AekLd = json_decode($vz_GM, true);
        goto QOF7Y;
        VNFdb:
        curl_setopt($OiEUt, CURLOPT_POSTFIELDS, $NiBdU);
        goto qu12I;
        iSEhO:
        $wYnwQ = trim(PHP_OS);
        goto pNfHz;
        zEBOn:
        if ($IBftm == "\66") {
            goto EV3nk;
        }
        goto WvGuF;
        VigmA:
        if ($IBftm == "\x32\x37") {
            goto OkYyx;
        }
        goto N4rLE;
        qy_tN:
        if ($IBftm == "\x32\x31") {
            goto aBg4K;
        }
        goto tEEqJ;
        gZBqR:
        $NYaeC = "\x32\x35\x36\71\x32";
        goto Rhqgb;
        qNwRw:
        function WzWOA($prqI_)
        {
            goto cOniw;
            ThKxo:
            geoXR:
            goto RxRvv;
            cOniw:
            switch ($prqI_) {
                case "\127\111\116\x4e\x54":
                    goto x9H42;
                    TNRMk:
                    return [md5($DibU4), $n0Dpo];
                    goto Bb6bj;
                    hMpDN:
                    goto geoXR;
                    goto fsOyq;
                    Bb6bj:
                    qudj6:
                    goto hMpDN;
                    tbJdo:
                    $n0Dpo = $IiRhB[1];
                    goto YhfMs;
                    x9H42:
                    $DibU4 = shell_exec("\x77\155\x69\x63\40\143\x73\x70\162\157\144\x75\143\164\40\147\x65\x74\40\x55\x55\111\104");
                    goto OfKKE;
                    vRmAz:
                    die;
                    goto Q5xHB;
                    d7xiA:
                    $IiRhB = explode("\15\12", $IiRhB);
                    goto tbJdo;
                    OfKKE:
                    $WtKq0 = explode("\15\xa", $DibU4);
                    goto O8KUO;
                    YhfMs:
                    if (strlen($DibU4) > 0 && strlen($n0Dpo) > 0) {
                        goto urg9g;
                    }
                    goto Yr4BO;
                    Q5xHB:
                    goto qudj6;
                    goto G23Ch;
                    G23Ch:
                    urg9g:
                    goto TNRMk;
                    fzatA:
                    $IiRhB = shell_exec("\167\x6d\x69\x63\40\143\163\160\x72\157\144\x75\143\x74\x20\147\145\x74\40\x56\145\156\144\157\162");
                    goto d7xiA;
                    O8KUO:
                    $DibU4 = $WtKq0[1];
                    goto fzatA;
                    Yr4BO:
                    echo "\107\141\147\141\x6c\x20\115\x65\x6e\x64\141\160\141\x74\x6b\141\x6e\x20\x49\x6e\146\157\x72\155\x61\x73\151\x20\123\171\163\164\x65\x6d\x20\72\40" . $prqI_;
                    goto vRmAz;
                    fsOyq:
                case "\114\151\156\165\170":
                    goto oKXe9;
                    tuPbA:
                    $RWbvX = [];
                    goto Dj09X;
                    kyy7Y:
                    FFyJt:
                    goto Xgu67;
                    uEjyr:
                    Up6to:
                    goto s3RfX;
                    wU4sc:
                    ob_clean();
                    goto LIiLe;
                    hvU6E:
                    echo "\107\141\x67\141\154\x20\x4d\x65\156\x64\141\x70\x61\164\x6b\141\x6e\x20\x49\x6e\146\x6f\162\x6d\141\x73\151\x20\123\x79\x73\164\x65\155\x20\72\40" . $prqI_;
                    goto gJHCb;
                    apVXJ:
                    Y8AFp:
                    goto JmwmD;
                    oKXe9:
                    ob_start();
                    goto iGaHF;
                    JmwmD:
                    return [trim(md5($ZRBzF["\x5b\162\157\56\x73\171\163\164\145\x6d\56\x62\x75\151\x6c\x64\56\x66\x69\156\x67\145\x72\160\x72\x69\x6e\164\x5d"])), trim($ZRBzF["\133\x72\x6f\x2e\160\162\x6f\x64\x75\x63\164\56\142\162\x61\156\x64\135"])];
                    goto uEjyr;
                    Dj09X:
                    $QqOQf = explode("\xa", $GSPIy);
                    goto R1VWe;
                    R1VWe:
                    foreach ($QqOQf as $cpopZ) {
                        goto ZiA1m;
                        H2n87:
                        QknZw:
                        goto Lgkdf;
                        JsIhs:
                        $tGtVw[] = $BiugP[0];
                        goto vaWIF;
                        ZiA1m:
                        $BiugP = explode("\x3a", $cpopZ);
                        goto JsIhs;
                        vaWIF:
                        $RWbvX[] = isset($BiugP[1]) ? $BiugP[1] : "\153\157\163\x6f\x6e\147";
                        goto H2n87;
                        Lgkdf:
                    }
                    goto kyy7Y;
                    iGaHF:
                    system("\147\x65\164\160\162\157\x70");
                    goto NNQFx;
                    M5LKx:
                    $tGtVw = [];
                    goto tuPbA;
                    s3RfX:
                    goto geoXR;
                    goto ulU6E;
                    fvigr:
                    goto Up6to;
                    goto apVXJ;
                    NNQFx:
                    $GSPIy = ob_get_contents();
                    goto wU4sc;
                    LIiLe:
                    ob_end_flush();
                    goto M5LKx;
                    Xgu67:
                    $ZRBzF = array_combine($tGtVw, $RWbvX);
                    goto ZgIoL;
                    ZgIoL:
                    if (strlen($ZRBzF["\x5b\162\157\x2e\163\171\x73\x74\145\155\56\142\165\151\154\x64\56\146\151\156\x67\145\x72\x70\162\151\156\164\135"]) > 0 && strlen($ZRBzF["\x5b\162\x6f\x2e\x70\x72\x6f\x64\165\143\164\x2e\142\162\x61\156\144\x5d"]) > 0) {
                        goto Y8AFp;
                    }
                    goto hvU6E;
                    gJHCb:
                    die;
                    goto fvigr;
                    ulU6E:
                default:
                    echo "\x4f\x70\x65\x72\x61\x74\151\x6e\147\40\x53\x79\x73\164\x65\x6d\x20\x4e\157\x74\40\123\x55\160\160\x6f\x72\x74\x65\144\40\72\x20" . $prqI_;
                    die;
            }
            goto muuzo;
            muuzo:
            X9Q_E:
            goto ThKxo;
            RxRvv:
        }
        goto kiFCg;
        Gwn8G:
        eaXeR:
        goto ajOD2;
        GC1Dd:
        $v0Dl0 = array("\141\x70\160\x2d\x76\x65\x72\163\x69\x6f\156\x3a\x20\64\56\62\56\x31", "\x43\x6f\x6e\164\145\156\164\55\x54\x79\x70\x65\72\x20\141\x70\160\x6c\151\x63\141\x74\x69\x6f\156\57\x6a\163\x6f\156\x3b\40\143\x68\141\x72\x73\x65\x74\x3d\x55\x54\106\55\x38", "\110\x6f\163\164\72\40\142\151\155\141\160\154\x75\x73\x2e\164\x72\x69\56\143\x6f\56\x69\144", "\x43\157\x6e\x6e\145\143\x74\151\x6f\156\x3a\x20\x4b\145\145\160\55\x41\154\x69\166\145", "\125\163\145\162\55\x41\x67\145\x6e\x74\72\40\157\153\150\164\164\160\x2f\x34\56\x39\56\60");
        goto VZI0g;
        IEEaG:
        $NYaeC = "\62\x35\x33\64\61";
        goto tIu1Z;
        CbNSm:
        $AekLd = json_decode($d_9P6, true);
        goto CSk30;
        APqNO:
        if ($rX_VC == "\171") {
            goto HfKJG;
        }
        goto DvFNm;
        DHk9v:
        rB3Pe:
        goto CpaWr;
        Fyamh:
        curl_setopt($OiEUt, CURLOPT_POSTFIELDS, $NiBdU);
        goto ecCiJ;
        RVxRN:
        curl_setopt($OiEUt, CURLOPT_RETURNTRANSFER, 1);
        goto LLhF8;
        H9QAL:
        $NiBdU = "\173\42\x69\155\x65\151\x22\72\x22\127\x65\x62\123\x65\x6c\x66\143\x61\x72\x65\42\54\x22\154\141\x6e\x67\165\141\x67\145\42\72\42\42\54\x22\143\x61\x6c\x6c\120\154\141\156\x22\x3a\42\42\54\42\155\x73\151\163\x64\x6e\x22\72\42\42\54\x22\x73\145\143\x72\145\164\x4b\x65\x79\x22\72\x22\x22\x2c\x22\x73\x75\142\163\143\x72\151\x62\145\x72\124\x79\x70\145\x22\x3a\42\42\x2c\42\160\x72\157\x64\165\x63\164\111\x64\42\x3a\42" . $NYaeC . "\x22\x7d";
        goto dZXtC;
        NrNNs:
        c1qvj:
        goto TXEBJ;
        PJpCd:
        list($cc196, $spazJ) = array(md5("\164\x65\163"), "\x78\x69\x61\157\155\x69");
        goto gEPX7;
        lcmuN:
        BXnza:
        goto YPIgP;
        Rrn7v:
        goto ECFdw;
        goto lQAgt;
        WB7e2:
        $NYaeC = "\x32\65\x32\64\67";
        goto jxRNS;
        LzkD3:
        goto ECFdw;
        goto M1DAv;
        DvFNm:
        exit("\40{$tV_rq}\342\236\xa4{$oSnfI}\x20\124\145\x72\155\x61\x6b\x61\163\x69\x20\164\145\x6c\x61\150\x20\155\145\156\x67\x67\165\156\141\153\x61\x6e\40\x6d\x65\156\x75\x20\x69\x6e\x69\56\12");
        goto jxVKt;
        HIvAs:
        if ($nq0dX == 01) {
            goto QPlrb;
        }
        goto kU0Pz;
        GIl8L:
        echo "\40\x1b\133\x33\64\x6d\111\116\x46\117\x1b\x5b\60\155\x3a\40\103\x6f\160\171\x72\x69\x67\150\x74\40\x32\x30\62\62\54\x20\x49\x64\x64\141\x6e\164\40\x49\104\12\12";
        goto ntNMn;
        cyqRh:
        echo "\xa\40\33\x5b\x33\64\155\111\116\x46\x4f\33\x5b\60\155\72\x20\116\x75\x6d\x62\x65\162\x20\x20\40\x20\x20\40\x20\x20\72\x20";
        goto z7jpt;
        xJKHl:
        SAojG:
        goto bfeua;
        HEyC7:
        exit("\x20{$tV_rq}\xe2\236\244{$oSnfI}\x20\120\151\154\151\x68\x20\x6d\x65\156\x75\40\171\x61\x6e\x67\x20\144\151\x20\151\156\x67\151\156\x6b\x61\156\56\12");
        goto xpzLs;
        UxjFC:
        if ($IBftm == "\x39") {
            goto Bwr6b;
        }
        goto nDLw6;
        DqN9D:
        $AekLd = json_decode($shtbn, true);
        goto zuIMi;
        uZuvg:
        $NYaeC = "\62\x35\x34\65\71";
        goto DTgof;
        v3l6N:
        curl_setopt($OiEUt, CURLOPT_URL, "\150\164\164\160\x73\x3a\57\57\x62\x69\x6d\141\160\x6c\x75\x73\x2e\x74\x72\151\56\143\157\x2e\x69\144\57\141\x70\x69\x2f\166\61\x2f\x6c\x6f\x67\x69\156\x2f\154\x6f\x67\x69\x6e\x2d\167\x69\x74\x68\x2d\157\x74\160");
        goto S_1V7;
        cHtzm:
        Bwr6b:
        goto AVBQw;
        jxRNS:
        goto ECFdw;
        goto HWa8w;
        ukc0s:
        $AekLd = json_decode($vz_GM, true);
        goto bhzf_;
        sstk_:
        if ($IBftm == "\63") {
            goto JVFL6;
        }
        goto T9ZHN;
        QJeRT:
        echo "\xa\40\x1b\133\63\x34\x6d\111\116\x46\x4f\33\x5b\x30\x6d\72\x20\x44\x65\163\x63\162\151\160\x74\x69\157\156\x20\160\141\x6b\145\x74\x2e\12";
        goto Elqh9;
        DaXCS:
        goto AHSg6;
        goto LTbSE;
        LUnAT:
        $Rrgnc = $AekLd["\160\162\157\x64\165\143\164"]["\160\162\x6f\144\x75\x63\164\116\141\155\x65"];
        goto btjWl;
        mxe2E:
        curl_setopt($OiEUt, CURLOPT_POSTFIELDS, $NiBdU);
        goto ka1Vu;
        G73Rz:
        if ($IBftm == "\x34\x30") {
            goto YM3LV;
        }
        goto jgOuh;
        sgaW2:
        $NYaeC = "\62\x35\66\x30\62";
        goto GJR2c;
        LZLFj:
        goto ECFdw;
        goto lcmuN;
        cbD0e:
        if ($IBftm == "\x33\65") {
            goto FkxOa;
        }
        goto ORgk6;
        ESwgE:
        curl_setopt($OiEUt, CURLOPT_HTTPHEADER, $v0Dl0);
        goto v34s0;
        yafhV:
        $NYaeC = "\62\x35\66\63\62";
        goto lB7Ka;
        bESob:
        Qlroy:
        goto rlwJU;
        jgOuh:
        goto ECFdw;
        goto gNo_K;
        p6CgE:
        $vz_GM = curl_exec($OiEUt);
        goto ukc0s;
        Z21zy:
        if ($IBftm == "\63\x30") {
            goto DgX1d;
        }
        goto f0FQG;
        enNgk:
        gwqoq:
        goto OCj3t;
        EtRMP:
        $WzaE0 = $AekLd["\160\x72\x6f\144\x75\143\x74"]["\160\162\157\x64\x75\143\x74\x50\162\151\143\x65"];
        goto jxX6e;
        RzGn0:
        echo "\x20\33\133\63\64\155\x49\116\x46\117\33\x5b\60\155\x3a\x20\157\164\x70\40\x20\40\x20\40\x20\40\x20\x20\40\x20\72\x20";
        goto dRYa3;
        l9kzR:
        $NYaeC = "\x32\x35\x37\x33\x37";
        goto Rrn7v;
        c1bKx:
        $NYaeC = "\62\x35\x36\x36\71";
        goto TZ_PU;
        U9V6k:
        FHegX:
        goto gkKCl;
        dgdT_:
        curl_setopt($xFq3C, CURLOPT_SSL_VERIFYPEER, 0);
        goto ekOwZ;
        zTwI2:
        $bmELv = ["\164\171\x70\145" => "\124\150\162\145\145", "\x62\162\141\156\144" => $spazJ];
        goto Obhk6;
        OYB3O:
        $spazJ = '';
        goto qNwRw;
        RDtxx:
        YM3LV:
        goto G943t;
        jQogR:
        if ($IBftm == "\x33\x37") {
            goto YhJcL;
        }
        goto myzbX;
        iY28o:
        curl_setopt($xFq3C, CURLOPT_URL, "\x68\164\x74\x70\x73\72\x2f\57\150\164\164\160\x62\151\x6e\56\x6f\x72\147\x2f\151\x70");
        goto HVgUC;
        T3EvX:
        QISi9:
        goto gy7yS;
        kU0Pz:
        if ($nq0dX == 02) {
            goto BPZLF;
        }
        goto pSVdc;
        GVVaX:
        echo "\x20\11\101\165\x74\x68\157\162\40\40\40\40\72\x20{$tV_rq}\111\x64\x64\141\156\x74\40\111\x44{$oSnfI}\xa\xa";
        goto DHk9v;
        gAu6y:
        curl_setopt($OiEUt, CURLOPT_RETURNTRANSFER, 1);
        goto k6ei2;
        wRX2g:
        if ($IBftm == "\63\x33") {
            goto eU5C1;
        }
        goto AES2O;
        qnOJK:
        $qqdKO = $AekLd["\143\x61\154\154\120\154\x61\156"];
        goto d6OnG;
        QmAaH:
        goto o2JTv;
        goto q7o92;
        HmgB9:
        curl_setopt($xFq3C, CURLOPT_HTTPHEADER, $Pkwi8);
        goto JnGw8;
        J30GX:
        QmoQo:
        goto o5iDa;
        UISWk:
        goto ECFdw;
        goto BIgcc;
        w9XVB:
        oQ6Qj:
        goto JGVT_;
        k6ei2:
        curl_setopt($OiEUt, CURLOPT_SSL_VERIFYPEER, 0);
        goto VPllW;
        FSdt1:
        if ($IBftm == "\61\66") {
            goto IfZzG;
        }
        goto hXTum;
        tNXV6:
        $hgEPT = readline("\40\342\x9e\244\x20\x42\165\x79\40\141\x67\141\151\156\40\x70\x61\x63\x6b\x61\147\145\x20\133\x79\x2f\x6e\135\x20\x42\x61\x63\153\x20\x74\157\40\155\x65\156\x75\x3a\x20");
        goto I5QZw;
        eJMzj:
        BMXEm:
        goto J9bH0;
        JWn4V:
        goto ECFdw;
        goto NrNNs;
        Eazdq:
        goto ECFdw;
        goto xJKHl;
        pyG6u:
        goto ECFdw;
        goto b_SNl;
        p_za1:
        if ($IBftm == "\x31\x35") {
            goto pJ0Zm;
        }
        goto FSdt1;
        DjlCo:
        $NiBdU = "\x7b\x22\151\155\145\151\42\x3a\42\x41\x6e\144\162\x6f\151\x64\x20\143\60\x38\x32\x66\67\66\61\143\x34\141\x30\x38\65\61\66\x22\54\x22\155\x73\151\x73\144\156\x22\72\42" . $qoutn . "\x22\x7d";
        goto l7g1z;
        PAPS_:
        $NYaeC = "\62\65\x36\70\63";
        goto JWn4V;
        UFCgt:
        goto UPr7i;
        goto fBkr_;
        sNqTw:
        if ($IBftm == "\x32\66") {
            goto BXnza;
        }
        goto VigmA;
        pNfHz:
        if (!($wYnwQ == null)) {
            goto FHegX;
        }
        goto ce5dl;
        f0FQG:
        if ($IBftm == "\63\x31") {
            goto P3Rx_;
        }
        goto fuYck;
        lEZZ0:
        N62Hx:
        goto gZBqR;
        D5t42:
        $NYaeC = "\x32\x35\62\x36\67";
        goto LZLFj;
        KCPbH:
        echo "\xa";
        goto sm6Io;
        Noq3L:
        echo "\x20\33\x5b\x33\64\155\x49\116\x46\x4f\x1b\133\60\x6d\72\x20\x1b\133\x39\61\x6d\117\157\160\163\x21\x20\107\141\147\x61\x6c\40\x6d\x65\x6d\142\145\x6c\x69\x20\x70\141\153\145\x74\56\33\133\60\x6d\12\xa";
        goto QmAaH;
        bn2kv:
        curl_setopt($OiEUt, CURLOPT_CUSTOMREQUEST, "\x50\117\123\124");
        goto mwc_L;
        dyq3o:
        goto ECFdw;
        goto gBjYq;
        Kinz5:
        if ($IBftm == "\65") {
            goto oQ6Qj;
        }
        goto zEBOn;
        wfs3Q:
        if ($IBftm == "\x31\x32") {
            goto K582A;
        }
        goto SVYVS;
        dSN4e:
        $NYaeC = "\62\x35\64\66\71";
        goto Eazdq;
        JzlHM:
        curl_setopt($OiEUt, CURLOPT_RETURNTRANSFER, 1);
        goto Euq9a;
        mwc_L:
        curl_setopt($OiEUt, CURLOPT_POSTFIELDS, $NiBdU);
        goto p6CgE;
        YPIgP:
        $NYaeC = "\x32\x32\66\x34\x38";
        goto W0dAr;
        sYxm8:
        goto ECFdw;
        goto J30GX;
        nKb3G:
        if ($IBftm == "\x38") {
            goto N62Hx;
        }
        goto UxjFC;
        gBjYq:
        aFa0z:
        goto tJSkJ;
        DTgof:
        goto ECFdw;
        goto iYIwo;
        EdJ_t:
        goto ECFdw;
        goto B1RuY;
        iNIdk:
        $OiEUt = curl_init();
        goto Zflai;
        Vg3an:
        qOMzZ:
        goto oCbBF;
        jEtTA:
        goto ECFdw;
        goto e1Ltz;
        CEAXB:
        JJUaL:
        goto DaXCS;
        jxVKt:
        goto utDIY;
        goto xpWh2;
        tEEqJ:
        if ($IBftm == "\62\x32") {
            goto O_K4h;
        }
        goto FTJ0X;
        RJQzv:
        curl_setopt($OiEUt, CURLOPT_SSL_VERIFYHOST, 0);
        goto S2HxU;
        zuIMi:
        $tCOXN = $AekLd["\x6f\x72\x69\147\151\156"];
        goto PJpCd;
        Zxt10:
        $NYaeC = "\62\65\64\67\x36";
        goto x_E8e;
        kOsZQ:
        curl_setopt($OiEUt, CURLOPT_HTTPHEADER, $v0Dl0);
        goto cHJW_;
        Zflai:
        curl_setopt($OiEUt, CURLOPT_URL, "\150\x74\164\160\x73\x3a\57\57\142\151\x6d\x61\x70\154\165\163\56\164\x72\151\x2e\x63\x6f\x2e\x69\x64\x2f\141\160\x69\57\x76\x31\57\160\165\x72\143\x68\141\163\x65\57\160\165\162\x63\150\x61\x73\145\x2d\x70\162\x6f\x64\165\143\164");
        goto fteNH;
        q7o92:
        RhwWR:
        goto u42ek;
        XzO_d:
        $NYaeC = "\x32\65\66\63\65";
        goto B0vM7;
        Vngwe:
        curl_setopt($OiEUt, CURLOPT_SSL_VERIFYHOST, 0);
        goto YrtUE;
        Zu6Xf:
        echo "\12\x20\x1b\133\x33\64\x6d\111\x4e\106\117\33\x5b\x30\x6d\72\40\x43\x61\154\154\x70\x6c\x61\x6e\x20\x3a\40{$qqdKO}\xa";
        goto zFUJq;
        x42Ec:
        $v0Dl0 = array("\141\x70\x70\x2d\166\x65\x72\x73\x69\157\x6e\72\x20\64\56\62\x2e\x31", "\103\x6f\156\164\x65\156\x74\x2d\124\171\x70\x65\72\40\x61\160\160\154\x69\x63\x61\164\x69\x6f\x6e\57\x6a\x73\157\x6e\x3b\40\x63\x68\x61\x72\x73\145\164\75\x55\124\x46\55\70", "\110\x6f\x73\x74\x3a\x20\142\x69\x6d\x61\x70\x6c\x75\x73\56\164\x72\151\x2e\x63\x6f\56\x69\144", "\103\157\x6e\156\x65\x63\164\151\x6f\156\72\x20\x4b\x65\x65\160\55\101\x6c\x69\166\145", "\125\x73\145\x72\x2d\x41\x67\x65\156\164\72\40\157\153\x68\x74\x74\160\57\64\x2e\x39\x2e\x30");
        goto NM22q;
        YrtUE:
        curl_setopt($OiEUt, CURLOPT_CUSTOMREQUEST, "\x50\117\x53\124");
        goto Fyamh;
        AhIRK:
        goto ECFdw;
        goto lEZZ0;
        Elqh9:
        echo "\x20\x1b\x5b\x33\x34\x6d\111\116\x46\117\33\133\60\x6d\x3a\40{$Rrgnc}\x20\55\x20\x52\x70\x2e{$WzaE0}\xa";
        goto bcsVh;
        TZ_PU:
        goto ECFdw;
        goto y3YXM;
        U929J:
        die;
        goto w8Cpd;
        eKT85:
        goto rB3Pe;
        goto xdVHa;
        jEuHE:
        SY17d:
        goto D5t42;
        CN0T9:
        $NYaeC = "\x32\65\65\x34\65";
        goto GRtx7;
        dRYa3:
        $E2p4W = trim(fgets(STDIN));
        goto PpwCy;
        S_1R6:
        $FtQJV = "\x1b\133\71\62\155";
        goto wBFjA;
        o5iDa:
        $NYaeC = "\62\x35\x32\x35\x34";
        goto UISWk;
        nDLw6:
        if ($IBftm == "\61\60") {
            goto eYvNn;
        }
        goto Yv0uI;
        Ouk9D:
        $NYaeC = "\62\x35\x35\x34\x36";
        goto I_H9I;
        BuJlZ:
        goto ECFdw;
        goto P9Zdc;
        e6v1m:
        $aN5kv = date("\131\x2d\x6d\55\x64");
        goto kS_DX;
        VsXzU:
        $FtQJV = "\33\x5b\71\x32\x6d";
        goto K3gM_;
        tiQCK:
        FkxOa:
        goto EdQlr;
        BAc8a:
        if ($IBftm == "\x32\64") {
            goto iHWgC;
        }
        goto RFTwQ;
        K2iRn:
        curl_setopt($OiEUt, CURLOPT_URL, "\150\x74\164\160\x73\72\57\x2f\142\x69\x6d\x61\160\x6c\165\x73\x2e\164\162\x69\56\143\x6f\56\x69\x64\57\141\160\151\57\x76\61\x2f\x6c\157\147\x69\x6e\57\157\x74\x70\x2d\x72\145\161\x75\x65\x73\x74");
        goto tNszL;
        fBkr_:
        l5R8D:
        goto U929J;
        kaqkK:
        $NYaeC = "\x32\65\x32\x35\x35";
        goto YaGgo;
        LTbSE:
        QPlrb:
        goto svXnk;
        ajOD2:
        goto oYwTO;
        goto OYFxA;
        Rhqgb:
        goto ECFdw;
        goto cHtzm;
        QOF7Y:
        $b9VlG = $AekLd["\160\x72\x6f\x64\x75\143\164"]["\160\162\x6f\x64\x75\143\164\x49\x64"];
        goto hq0fR;
        Euq9a:
        curl_setopt($OiEUt, CURLOPT_SSL_VERIFYPEER, 0);
        goto RJQzv;
        gkKCl:
        $cc196 = '';
        goto OYB3O;
        yYzfb:
        if ($IBftm == "\61\71") {
            goto aFa0z;
        }
        goto xJhCH;
        hzeKF:
        OkYyx:
        goto uZuvg;
        x7JNk:
        oYwTO:
        goto RzaMK;
        l7g1z:
        $v0Dl0 = array("\x61\x70\160\x2d\166\x65\x72\163\x69\157\x6e\x3a\x20\64\56\x32\56\61", "\x43\157\156\164\145\x6e\x74\x2d\124\x79\160\x65\x3a\x20\141\x70\x70\x6c\x69\143\141\164\x69\x6f\x6e\57\152\x73\x6f\x6e\73\x20\143\x68\x61\162\163\x65\164\75\x55\124\x46\x2d\x38", "\110\x6f\163\164\x3a\40\142\151\x6d\x61\x70\154\165\163\56\x74\x72\151\x2e\x63\x6f\56\151\144", "\103\157\x6e\x6e\x65\143\x74\x69\157\x6e\x3a\40\x4b\x65\x65\x70\55\x41\154\151\166\145", "\x55\163\x65\x72\x2d\101\x67\145\156\164\x3a\40\x6f\153\x68\164\164\160\57\64\56\71\x2e\x30");
        goto FrvFM;
        EdQlr:
        $NYaeC = "\x32\65\x36\x30\x33";
        goto Xd3ZS;
        t5WdI:
        echo "\x20\x20\40\x20{$tV_rq}\342\236\xa4{$oSnfI}\40\60\x32\x2e\x20{$tV_rq}\102\165\171\x20\120\x61\x63\153\141\147\145\40\x42\151\155\141\x2b{$oSnfI}\x20\xa";
        goto KCPbH;
        xoN0R:
        if ($IBftm == "\x31\x38") {
            goto QISi9;
        }
        goto yYzfb;
        d6OnG:
        sleep(3);
        goto Zu6Xf;
        w8Cpd:
        UPr7i:
        goto x7JNk;
        uKcnR:
        self::krhU6();
        goto iSEhO;
        TRJ5S:
        goto ECFdw;
        goto Vg3an;
        Tl5Fx:
        XN2qz:
        goto uVHLe;
        l8S0B:
        YjzM9:
        goto CN0T9;
        DPWmx:
        eYvNn:
        goto yafhV;
        GR0LN:
        goto Oxie7;
        goto Gwn8G;
        Xd3ZS:
        goto ECFdw;
        goto ilOfP;
        Yv0uI:
        if ($IBftm == "\x31\61") {
            goto YjzM9;
        }
        goto wfs3Q;
        S2HxU:
        curl_setopt($OiEUt, CURLOPT_CUSTOMREQUEST, "\x50\117\123\124");
        goto XwptJ;
        PbD2J:
        $abgaG = $AekLd["\x70\x72\x6f\144\165\143\x74"]["\x70\162\x6f\144\165\143\164\x44\145\x73\x63\x72\x69\160\x74\x69\x6f\156"];
        goto O6ZqQ;
        JnGw8:
        curl_setopt($xFq3C, CURLOPT_RETURNTRANSFER, 1);
        goto dgdT_;
        eoJUj:
        echo "\xd\12\15\xa{$tV_rq}\342\x9e\xa4{$oSnfI}\40\x50\141\143\x6b\141\x67\145\40\123\160\x65\163\151\141\x6c\40{$tV_rq}\102\151\155\141\53{$oSnfI}\15\12\xd\12{$tV_rq}\xe2\x9e\244{$oSnfI}\x20\61\56\x20\x20\x57\x65\154\x63\x6f\x6d\x65\40\122\145\x77\141\162\144\x20\65\x47\102\40\11\x7c\x20{$tV_rq}\x52\160\x2e\61{$oSnfI}\15\xa{$tV_rq}\342\x9e\xa4{$oSnfI}\40\x32\x2e\x20\x20\x28\x4e\x45\x57\x29\x20\x31\x30\x47\102\40\x33\40\110\x61\x72\151\40\x20\x9\x7c\40{$tV_rq}\x52\160\56\61\60\56\60\x30\x30{$oSnfI}\15\12{$tV_rq}\342\x9e\xa4{$oSnfI}\40\x33\56\40\40\x28\x4e\x45\x57\x29\40\64\x47\102\x20\63\x20\110\x61\162\x69\40\x20\x20\x9\174\x20{$tV_rq}\122\160\x2e\x35\60\x30\60{$oSnfI}\xd\xa{$tV_rq}\342\x9e\244{$oSnfI}\40\64\x2e\40\40\x28\x4e\105\127\x29\x20\70\x47\102\x20\65\40\110\x61\162\x69\40\40\x20\11\x7c\40{$tV_rq}\x52\160\56\x31\x33\x2e\60\60\60{$oSnfI}\xd\12{$tV_rq}\342\x9e\244{$oSnfI}\40\65\56\40\x20\50\x4e\105\127\51\x20\61\x30\107\102\40\63\60\x20\110\141\162\x69\40\x9\x7c\x20{$tV_rq}\122\x70\56\x31\x38\56\x30\x30\60{$oSnfI}\xd\xa{$tV_rq}\342\236\244{$oSnfI}\x20\66\x2e\x20\40\x28\116\105\x57\x29\x20\x31\x30\x47\x42\40\x37\40\110\141\x72\151\x20\x20\11\174\x20{$tV_rq}\122\x70\x2e\x31\60\x2e\60\60\x30{$oSnfI}\xd\xa{$tV_rq}\xe2\x9e\244{$oSnfI}\40\67\56\x20\40\50\116\105\127\x29\x20\x39\x47\102\40\65\x20\110\141\x72\x69\x20\40\40\x9\174\40{$tV_rq}\x52\160\x2e\x31\60\x2e\60\60\60{$oSnfI}\15\xa{$tV_rq}\xe2\236\244{$oSnfI}\x20\70\56\40\40\x28\116\105\x57\51\40\x32\107\x42\40\x31\40\x48\x61\162\151\40\x20\40\11\x7c\40{$tV_rq}\122\x70\x2e\64\60\60\60{$oSnfI}\15\12{$tV_rq}\342\236\244{$oSnfI}\x20\x39\x2e\x20\x20\x28\x4e\x45\127\x29\40\x36\107\102\40\x33\40\x48\x61\162\x69\x20\40\40\x9\174\x20{$tV_rq}\122\160\x2e\61\60\56\60\x30\x30{$oSnfI}\15\xa{$tV_rq}\342\236\xa4{$oSnfI}\40\61\x30\x2e\x20\50\x4e\x45\x57\51\x20\66\x47\x42\40\63\40\x48\141\162\151\40\40\40\x9\x7c\40{$tV_rq}\x52\160\56\x31\x30\x2e\60\x30\x30{$oSnfI}\15\xa{$tV_rq}\xe2\x9e\xa4{$oSnfI}\40\61\61\56\40\x28\x4e\x45\x57\x29\x20\x36\x47\x42\x20\x35\x20\x48\141\162\151\x20\40\x20\11\x7c\x20{$tV_rq}\122\160\56\61\x30\56\x30\60\x30{$oSnfI}\xd\12{$tV_rq}\342\x9e\xa4{$oSnfI}\x20\x31\x32\x2e\x20\x28\x4e\105\x57\51\40\x36\107\102\40\65\x20\x48\x61\162\x69\40\40\x20\11\174\x20{$tV_rq}\122\x70\x2e\61\x30\x2e\60\60\x30{$oSnfI}\xd\12{$tV_rq}\342\236\xa4{$oSnfI}\x20\x31\x33\x2e\x20\50\x4e\105\127\51\x20\x36\x47\102\40\65\x20\x48\141\x72\151\40\x20\x20\11\174\x20{$tV_rq}\x52\160\x2e\x31\x30\x2e\x30\60\60{$oSnfI}\15\xa{$tV_rq}\342\236\xa4{$oSnfI}\40\61\x34\x2e\x20\x28\x4e\105\x57\51\40\x32\65\x47\102\40\62\60\40\110\x61\162\151\x20\11\174\40{$tV_rq}\122\160\x2e\x32\65\56\60\x30\x30{$oSnfI}\xd\xa{$tV_rq}\342\236\xa4{$oSnfI}\40\61\x35\x2e\x20\50\x4e\105\127\51\40\62\x35\107\x42\40\61\x34\x20\110\x61\162\x69\40\11\x7c\40{$tV_rq}\122\160\x2e\x32\65\x2e\60\60\60{$oSnfI}\xd\12{$tV_rq}\xe2\236\244{$oSnfI}\x20\x31\x36\56\x20\50\x4e\x45\127\x29\x20\x32\x35\x47\102\40\63\60\40\x48\x61\162\151\x20\11\174\40{$tV_rq}\x52\160\x2e\x33\60\56\60\x30\x30{$oSnfI}\15\12{$tV_rq}\342\236\xa4{$oSnfI}\x20\x31\67\x2e\40\x28\116\105\127\x29\40\62\x35\107\x42\40\63\x30\x20\110\x61\162\151\40\x9\174\40{$tV_rq}\122\x70\56\x33\60\56\60\60\60{$oSnfI}\15\xa{$tV_rq}\342\236\244{$oSnfI}\40\61\70\56\40\50\116\105\x57\51\40\x32\x35\x47\x42\x20\x33\x30\x20\x48\x61\162\x69\x20\x9\174\40{$tV_rq}\122\160\x2e\63\60\x2e\60\x30\60{$oSnfI}\xd\12{$tV_rq}\342\x9e\xa4{$oSnfI}\x20\61\x39\56\x20\50\116\x45\127\x29\x20\x32\x35\107\x42\x20\x33\60\x20\110\x61\x72\x69\40\11\174\x20{$tV_rq}\122\x70\x2e\63\60\56\x30\60\60{$oSnfI}\xd\12{$tV_rq}\xe2\236\244{$oSnfI}\x20\x32\x30\x2e\40\50\116\x45\x57\x29\x20\62\65\x47\102\40\63\x30\40\x48\x61\x72\151\x20\11\174\x20{$tV_rq}\x52\x70\56\63\x30\x2e\60\60\x30{$oSnfI}\15\12{$tV_rq}\342\x9e\244{$oSnfI}\40\x32\61\56\40\x28\116\x45\127\51\40\x32\65\107\102\40\62\60\x20\x48\141\x72\151\40\x9\x7c\x20{$tV_rq}\x52\160\x2e\x32\65\x2e\x30\60\x30{$oSnfI}\xd\12{$tV_rq}\342\x9e\244{$oSnfI}\x20\62\x32\x2e\40\50\x4e\105\127\x29\40\62\65\x47\x42\x20\x33\x30\x20\x48\141\162\x69\40\11\174\x20{$tV_rq}\122\x70\56\63\60\56\x30\60\x30{$oSnfI}\xd\12{$tV_rq}\xe2\236\244{$oSnfI}\x20\x32\63\56\40\x28\x4e\105\127\x29\x20\62\60\x47\102\x20\x31\64\x20\110\141\x72\151\40\x9\x7c\40{$tV_rq}\122\160\56\61\65\56\x30\x30\60{$oSnfI}\15\xa{$tV_rq}\342\236\xa4{$oSnfI}\40\x32\64\56\40\50\116\x45\127\51\x20\x32\65\x47\102\x20\62\60\x20\110\x61\162\151\x20\11\x7c\40{$tV_rq}\x52\x70\x2e\x32\65\x2e\60\60\x30{$oSnfI}\15\12{$tV_rq}\xe2\x9e\244{$oSnfI}\40\x32\x35\x2e\x20\50\116\x45\127\x29\40\62\x35\107\102\40\63\60\40\x48\141\162\151\x20\11\x7c\x20{$tV_rq}\122\160\x2e\x32\x39\56\x30\60\60{$oSnfI}\40\xd\xa{$tV_rq}\xe2\236\xa4{$oSnfI}\x20\62\66\56\40\50\x4e\x45\x57\x29\x20\62\65\x47\x42\40\63\x30\x20\110\141\x72\x69\40\x9\174\x20{$tV_rq}\122\x70\56\x32\x35\x2e\60\x30\x30{$oSnfI}\40{$FtQJV}\50\x44\151\163\153\x6f\156\51{$oSnfI}\40\xd\12\15\xa{$tV_rq}\342\236\xa4{$oSnfI}\x20\x50\141\x63\153\141\147\x65\40\125\x70\144\x61\x74\145\x20{$tV_rq}\x42\x69\155\x61\x2b{$oSnfI}\xd\12\xd\xa{$tV_rq}\xe2\x9e\xa4{$oSnfI}\40\62\67\x2e\40\50\116\105\x57\51\x20\61\65\107\102\40\x33\x30\40\110\x61\162\151\40\x20\x9\x7c\x20{$tV_rq}\x52\x70\56\x32\60\x30\60\60{$oSnfI}\15\xa{$tV_rq}\xe2\x9e\xa4{$oSnfI}\x20\62\x38\56\x20\x28\x4e\x45\x57\51\40\x35\x35\x47\102\40\x33\60\40\x48\x61\x72\151\x20\x20\x9\x7c\x20{$tV_rq}\x52\160\x2e\65\x30\x2e\x30\x30\x30{$oSnfI}\xd\12{$tV_rq}\342\236\244{$oSnfI}\x20\62\71\x2e\x20\x28\x4e\x45\127\51\x20\66\65\107\102\40\63\x30\40\110\x61\162\151\x20\40\x9\x7c\x20{$tV_rq}\x52\x70\x2e\x36\60\x2e\60\60\60{$oSnfI}\xd\xa{$tV_rq}\xe2\x9e\244{$oSnfI}\x20\x33\60\x2e\x20\50\116\x45\x57\x29\40\x37\65\107\102\40\63\60\x20\x48\141\162\x69\40\x20\11\174\x20{$tV_rq}\122\x70\x2e\67\x35\x2e\x30\60\60{$oSnfI}\15\xa{$tV_rq}\xe2\x9e\xa4{$oSnfI}\x20\63\61\x2e\40\50\x4e\105\127\x29\x20\71\60\x47\x42\x20\63\x30\40\110\141\x72\151\x20\40\11\174\x20{$tV_rq}\122\160\56\x39\60\x2e\x30\60\60{$oSnfI}\15\12{$tV_rq}\342\236\xa4{$oSnfI}\40\63\x32\x2e\40\x28\x4e\105\x57\x29\40\x31\60\60\107\x42\x20\63\x30\40\x48\141\x72\151\x20\x9\x7c\x20{$tV_rq}\x52\x70\x2e\x39\x30\x2e\x30\x30\60{$oSnfI}\15\12\15\xa{$tV_rq}\342\x9e\244{$oSnfI}\40\x50\x61\143\x6b\x61\x67\145\40\125\160\144\141\164\x65\x20\x41\117\x4e\40{$tV_rq}\x42\x69\x6d\141\x2b{$oSnfI}\15\12\15\12{$tV_rq}\342\236\244{$oSnfI}\40\x33\x33\56\x20\x28\x4e\x45\x57\51\40\101\x4f\x4e\40\x46\165\x6c\154\x20\71\107\102\x20\40\11\x7c\x20{$tV_rq}\x52\160\56\63\x37\x2e\x30\x30\x30{$oSnfI}\15\12{$tV_rq}\342\236\xa4{$oSnfI}\x20\63\x34\x2e\40\x28\x4e\105\127\51\x20\x41\x4f\116\x20\x46\165\154\x6c\40\62\56\65\107\102\x9\174\40{$tV_rq}\x52\x70\56\x31\64\56\65\x30\60{$oSnfI}\xd\xa{$tV_rq}\342\x9e\xa4{$oSnfI}\40\63\65\56\x20\50\x4e\x45\127\x29\x20\x41\x4f\116\40\x46\165\154\x6c\40\x33\x2e\65\107\102\11\x7c\x20{$tV_rq}\x52\x70\56\x31\x38\x2e\65\x30\60{$oSnfI}\xd\xa{$tV_rq}\342\236\xa4{$oSnfI}\x20\x33\66\x2e\40\101\x4f\x4e\x20\62\60\x47\x42\40\65\65\x72\x69\x62\165\x20\x20\x20\x20\40\11\x7c\x20{$tV_rq}\122\x70\56\65\x35\x2e\x30\60\x30{$oSnfI}\xd\12{$tV_rq}\342\x9e\244{$oSnfI}\40\x33\67\x2e\40\101\x4f\116\40\x35\60\107\x42\40\x39\71\162\151\142\x75\x20\x20\40\40\40\11\174\40{$tV_rq}\122\160\56\71\71\56\60\x30\x30{$oSnfI}\15\xa\xd\xa\15\xa\xa";
        goto P871b;
        Nwasi:
        O_K4h:
        goto PAPS_;
        zYQNM:
        error_reporting(0);
        goto uKcnR;
        I_H9I:
        goto ECFdw;
        goto hjMZV;
        JGVT_:
        $NYaeC = "\62\x33\71\70\x32";
        goto jEtTA;
        myzbX:
        if ($IBftm == "\x33\x38") {
            goto BMXEm;
        }
        goto mfCn6;
        xMrFW:
        $NYaeC = "\x32\65\x36\67\x33";
        goto ZBQ3M;
        o1JEP:
        if ($IBftm == "\61\x34") {
            goto QmoQo;
        }
        goto p_za1;
        DJk_E:
        if ($AekLd["\163\164\141\x74\x75\x73"] == true) {
            goto RhwWR;
        }
        goto Noq3L;
        K86Ro:
        echo "\40\x1b\133\x33\64\155\111\116\x46\x4f\33\133\x30\x6d\x3a\40\x4d\145\163\x73\141\147\x65\40\x20\x20\40\x20\x20\40\x3a\x20\x1b\133\x39\62\x6d{$AekLd["\155\145\163\x73\x61\147\x65"]}\33\133\60\155\xa";
        goto RzGn0;
        CpaWr:
        $tV_rq = "\x1b\x5b\63\x33\155";
        goto VsXzU;
        ka1Vu:
        $d_9P6 = curl_exec($OiEUt);
        goto CbNSm;
        FrBOI:
        curl_setopt($OiEUt, CURLOPT_SSL_VERIFYPEER, 0);
        goto PPHw0;
        hWscZ:
        $ZKoQ_ = curl_exec($OiEUt);
        goto rc1Bh;
        FTJ0X:
        if ($IBftm == "\62\x33") {
            goto c1qvj;
        }
        goto BAc8a;
        qgrp7:
        if ($IBftm == "\x32\x39") {
            goto SAojG;
        }
        goto Z21zy;
        fevaW:
        $J44Eo = fread($IjLzU, filesize("\154\x69\x63\x65\x6e\x73\151\137\x6b\x65\171\56\164\x78\164"));
        goto e6v1m;
        X32KX:
        $NYaeC = "\x32\x35\66\x37\x35";
        goto AhIRK;
        jxX6e:
        $abgaG = $AekLd["\160\x72\x6f\x64\165\x63\164"]["\160\162\157\144\x75\143\x74\104\145\163\143\x72\x69\160\x74\x69\157\x6e"];
        goto QJeRT;
        kS_DX:
        $T1AbX = "\x54\x68\x72\x65\x65";
        goto hry2n;
        qu12I:
        $hVBiR = curl_exec($OiEUt);
        goto cIhL_;
        S_DrB:
        $NYaeC = "\x32\65\67\x30\61";
        goto yTFrh;
        fuYck:
        if ($IBftm == "\63\x32") {
            goto gwqoq;
        }
        goto wRX2g;
        hjMZV:
        qWez1:
        goto H3yej;
        mBwYo:
        curl_setopt($OiEUt, CURLOPT_CUSTOMREQUEST, "\x50\117\123\x54");
        goto VNFdb;
        awi6V:
        curl_setopt($OiEUt, CURLOPT_CUSTOMREQUEST, "\120\117\x53\x54");
        goto mxe2E;
        yrkLL:
        $Pkwi8[] = "\x48\157\163\164\72\40\150\x74\164\160\142\x69\x6e\x2e\157\162\147";
        goto L1YHT;
        ilOfP:
        uHF5n:
        goto jy6iX;
        cD2_7:
        curl_setopt($OiEUt, CURLOPT_SSL_VERIFYHOST, 0);
        goto awi6V;
        mfCn6:
        if ($IBftm == "\63\71") {
            goto X6Gpn;
        }
        goto G73Rz;
        usNXx:
        goto ECFdw;
        goto DPWmx;
        eR2fW:
        $OiEUt = curl_init();
        goto tj2vt;
        asb0i:
        XheSV:
        goto S_DrB;
        OHmSo:
        $NiBdU = "\173\42\151\x6d\x65\151\x22\72\x22\127\145\142\x53\x65\x6c\146\143\x61\162\x65\42\x2c\42\154\x61\156\x67\165\x61\x67\145\42\x3a\x22\x22\x2c\42\x63\x61\154\154\x50\154\x61\x6e\42\72\x22\42\x2c\42\155\x73\x69\x73\144\x6e\x22\x3a\42\x22\54\x22\163\x65\x63\162\x65\164\x4b\x65\171\42\72\x22\x22\x2c\x22\163\165\142\163\143\162\x69\142\x65\x72\x54\x79\x70\145\42\x3a\x22\42\x2c\42\160\162\x6f\x64\x75\x63\164\x49\x64\42\72\42" . $azM6J . "\x22\175";
        goto GC1Dd;
        HWa8w:
        P3Rx_:
        goto Zxt10;
        pSVdc:
        if ($nq0dX == 03) {
            goto XN2qz;
        }
        goto HEyC7;
        kiFCg:
        function DbYBa($xFq3C, $QqOQf)
        {
            goto GPFUH;
            uhGMT:
            return $zUa9b;
            goto B3n0Y;
            uD_3w:
            curl_setopt($OiEUt, CURLOPT_HEADER, false);
            goto x5OS8;
            gLqGN:
            curl_setopt($OiEUt, CURLOPT_POSTFIELDS, $QqOQf);
            goto knVO_;
            x5OS8:
            curl_setopt($OiEUt, CURLOPT_POST, true);
            goto gLqGN;
            P7SFh:
            $zUa9b = curl_exec($OiEUt);
            goto P9VJj;
            GPFUH:
            $OiEUt = curl_init($xFq3C);
            goto Vp2AL;
            Vp2AL:
            curl_setopt($OiEUt, CURLOPT_RETURNTRANSFER, true);
            goto uD_3w;
            knVO_:
            curl_setopt($OiEUt, CURLOPT_HTTPHEADER, array("\103\157\x6e\164\145\156\164\55\124\x79\160\145\x3a\40\x61\x70\x70\154\x69\143\141\x74\151\157\156\x2f\x6a\163\x6f\x6e", "\x43\x6f\x6e\164\x65\156\164\x2d\114\x65\x6e\x67\164\x68\x3a\40" . strlen($QqOQf)));
            goto P7SFh;
            P9VJj:
            curl_close($OiEUt);
            goto uhGMT;
            B3n0Y:
        }
        goto rCKJx;
        pMZj1:
        tYSFO:
        goto pvuuX;
        gy7yS:
        $NYaeC = "\62\x35\64\x36\65";
        goto dyq3o;
        RDiR7:
        DgX1d:
        goto WB7e2;
        T_YNm:
        $NYaeC = "\x32\65\x36\63\66";
        goto Ohpit;
        EZ9Ok:
        $NYaeC = "\x32\x35\66\x30\x34";
        goto yNqkc;
        xpzLs:
        goto Mw1TS;
        goto Tl5Fx;
        N4rLE:
        if ($IBftm == "\62\x38") {
            goto imjYp;
        }
        goto qgrp7;
        xyIGh:
        $NYaeC = "\x32\x33\x31\x36\x30";
        goto ZieAx;
        tJSkJ:
        $NYaeC = "\x32\65\x34\66\x30";
        goto TRJ5S;
        CKdgy:
        goto ECFdw;
        goto LhBFP;
        BIgcc:
        pJ0Zm:
        goto kaqkK;
        OCj3t:
        $NYaeC = "\x32\x35\x36\x39\63";
        goto CKdgy;
        FrvFM:
        $OiEUt = curl_init();
        goto K2iRn;
        FoMbJ:
        $U_0yc = json_decode($U_0yc, true);
        goto ljbK4;
        VXb2R:
        echo "\40\40\x20\x20{$tV_rq}\xe2\236\xa4{$oSnfI}\x20\x30\61\x2e\40{$tV_rq}\103\x68\x65\143\x6b\40\x44\x65\x74\141\x69\x6c\163{$oSnfI}\12";
        goto t5WdI;
        xJhCH:
        if ($IBftm == "\x32\60") {
            goto qOMzZ;
        }
        goto qy_tN;
        yTFrh:
        goto ECFdw;
        goto w9XVB;
        M1DAv:
        X6Gpn:
        goto m_3e9;
        S5wSH:
        o2JTv:
        goto gXIqj;
        tIu1Z:
        goto ECFdw;
        goto eJMzj;
        XwptJ:
        curl_setopt($OiEUt, CURLOPT_POSTFIELDS, $NiBdU);
        goto hWscZ;
        DoBAt:
        $xFq3C = curl_init();
        goto iY28o;
        ljbK4:
        if ($U_0yc["\143\x6f\144\145"] != 101) {
            goto l5R8D;
        }
        goto tJ7ZR;
        gEPX7:
        $IjLzU = fopen("\154\x69\x63\145\x6e\x73\x69\137\153\x65\x79\x2e\x74\170\x74", "\x72");
        goto fevaW;
        oCbBF:
        $NYaeC = "\62\x35\x34\66\x31";
        goto EdJ_t;
        lulAJ:
        IfZzG:
        goto XzO_d;
        hq0fR:
        $Rrgnc = $AekLd["\160\x72\157\x64\x75\x63\x74"]["\160\162\157\144\165\x63\164\116\141\155\x65"];
        goto EtRMP;
        Ohpit:
        goto ECFdw;
        goto T3EvX;
        hgYLl:
        ISzuW:
        goto T_YNm;
        PpwCy:
        $NiBdU = "\173\x22\144\145\166\x69\143\145\115\x61\156\165\x66\141\x63\164\165\x72\42\x3a\x22\101\x73\x75\x73\42\x2c\x22\144\145\x76\151\x63\x65\115\x6f\x64\x65\x6c\x22\x3a\x22\x41\123\x55\x53\x5f\132\x30\61\x51\104\x22\x2c\42\x64\145\x76\151\x63\x65\117\163\42\72\42\x41\x6e\144\x72\x6f\x69\144\x22\54\x22\x69\x6d\145\x69\x22\72\x22\x41\x6e\144\x72\157\151\144\40\x63\60\70\62\146\x37\x36\61\143\64\141\60\70\65\61\x36\42\x2c\x22\x6d\163\151\x73\x64\156\42\72\42" . $qoutn . "\42\54\42\x6f\x74\160\42\x3a\x22" . $E2p4W . "\42\x7d";
        goto x42Ec;
        lQAgt:
        JVFL6:
        goto r1r0D;
        bcsVh:
        echo "\x20\33\133\x33\x34\x6d\x49\x4e\x46\x4f\x1b\133\60\x6d\72\40" . $abgaG . "\xa";
        goto GIl8L;
        CirJQ:
        iFEty:
        goto sgaW2;
        iaYrg:
        echo "\12\12\40\x9\x54\157\157\x6c\x73\x20\x42\151\155\x61\x2b\x20\x76\x31\x2e\60\40\124\145\x6d\142\x61\x6b\40\160\141\x63\x6b\x61\x67\145\xa";
        goto itpVm;
        rCKJx:
        function BjbiE($lhliG, $ePykD, $PKD6u, $U6G18, $aN5kv)
        {
            goto Q23ap;
            Ncxso:
            echo "\x20\33\133\x33\64\155\x49\116\x46\x4f\33\x5b\x30\x6d\72\x20\x1b\133\x33\61\155\x49\x6e\146\157\x72\155\x61\164\151\x6f\156\x20\x4c\157\x67\x69\156\40\x46\x61\x69\x6c\x65\x64\33\133\60\155\12";
            goto GUA20;
            Q23ap:
            $xFq3C = "\x68\x74\x74\x70\x3a\x2f\57\x61\160\151\x2e\151\x70\153\172\x6f\156\145\x2e\155\171\56\151\x64\x2f\x61\x70\151\x6b\x65\171\57\x70\165\142\x6c\151\143\x2f\101\x70\x69\x2f\x6c\157\x67\151\x6e";
            goto mv2Sa;
            Ws5hL:
            if ($q0d8M["\163\164\x61\164\145"] != "\123\x75\x63\x63\x65\163\163" && $q0d8M["\143\x6f\x64\145"] != 101) {
                goto t0hUQ;
            }
            goto ZehvR;
            CBKdM:
            goto wTBx6;
            goto Q4fhW;
            O0_F0:
            die;
            goto CBKdM;
            kyD4c:
            $QqOQf = json_encode($QqOQf);
            goto iZvyz;
            TvX2f:
            goto c92D4;
            goto q7IK_;
            AKoOH:
            echo $q0d8M;
            goto O0_F0;
            iZvyz:
            $q0d8M = DbyBa($xFq3C, $QqOQf);
            goto GPb8d;
            ZehvR:
            if (!($q0d8M["\x73\x74\x61\164\x65"] == "\x53\165\x63\143\x65\x73\163" && $q0d8M["\x63\157\x64\145"] == 101)) {
                goto RwdWz;
            }
            goto EzgHo;
            pdC_g:
            wTBx6:
            goto zwlS6;
            gDQtJ:
            echo "\40\x1b\133\63\64\155\111\116\106\x4f\x1b\133\x30\155\72\40\x1b\x5b\63\x32\x6d\111\156\146\x6f\162\x6d\x61\164\151\x6f\x6e\40\x4c\157\x67\x69\x6e\x20\123\165\x6b\x73\145\x73\x1b\x5b\x30\x6d\x20\xa";
            goto C1Nw_;
            v8Sy8:
            $q0d8M = json_decode($q0d8M, true);
            goto Ws5hL;
            GPb8d:
            if (strlen($q0d8M) > 0 && eViW9($q0d8M)) {
                goto K44F3;
            }
            goto AKoOH;
            CVuuq:
            RwdWz:
            goto TvX2f;
            Q4fhW:
            K44F3:
            goto v8Sy8;
            EzgHo:
            $neRDE = $q0d8M["\x62\x65\x61\162\145\x72"];
            goto PvKE0;
            Si1mM:
            c92D4:
            goto pdC_g;
            C1Nw_:
            echo "\40\33\133\x33\64\x6d\111\116\106\117\33\x5b\x30\155\72\40\125\163\145\x72\x20\40\x3a\40{$Ajwmc["\x75\163\145\x72\x6e\x61\155\x65"]}\12";
            goto hyowZ;
            GUA20:
            die;
            goto Si1mM;
            hyowZ:
            return [$neRDE, $Ajwmc];
            goto CVuuq;
            q7IK_:
            t0hUQ:
            goto Ncxso;
            mv2Sa:
            $QqOQf = ["\164\x6f\x6b\145\x6e" => $lhliG, "\165\x69\144" => $ePykD, "\142\162\x61\156\144" => $PKD6u, "\x74\x79\160\x65" => $U6G18, "\x6e\157\167" => $aN5kv];
            goto kyD4c;
            PvKE0:
            $Ajwmc = $q0d8M["\x75\x73\x65\162"];
            goto gDQtJ;
            zwlS6:
        }
        goto nJmpl;
        zFUJq:
        echo "\x20\x1b\133\63\x34\155\x49\116\x46\117\33\x5b\60\155\72\40\x42\141\154\141\x6e\143\x65\x20\40\x3a\x20{$vuKV2}\12";
        goto MMADw;
        AES2O:
        if ($IBftm == "\x33\64") {
            goto iFEty;
        }
        goto cbD0e;
        GRtx7:
        goto ECFdw;
        goto wA8Gx;
        y3YXM:
        Q88te:
        goto l9kzR;
        g7EkM:
        echo "\x20{$tV_rq}\342\x9e\244{$oSnfI}\40\115\145\156\165\40\120\x72\x6f\x76\151\144\145\162\40{$tV_rq}\124\150\162\x65\x65{$oSnfI}\40\x42\x69\155\141\53\12";
        goto VXb2R;
        wBFjA:
        echo "\x20\33\133\x33\x34\x6d\111\116\x46\117\33\133\60\x6d\72\x20\107\x65\x74\40\x43\x68\x6f\x6f\x73\145\40\120\141\143\153\141\x67\x65\x2e\56\x2e\x2e\xa";
        goto eoJUj;
        B1RuY:
        aBg4K:
        goto U4su3;
        g7G_l:
        $Pkwi8[] = "\115\x6f\172\x69\x6c\154\x61\x2f\x35\x2e\60\40\50\x58\61\x31\73\40\x4c\x69\156\165\x78\x20\x69\66\70\66\x29\40\101\160\160\154\145\127\x65\142\113\x69\x74\57\x35\x33\67\56\x33\66\40\x28\x4b\x48\124\x4d\114\54\40\x6c\x69\153\x65\40\x47\x65\x63\x6b\x6f\x29\x20\x43\x68\162\x6f\x6d\x65\x2f\x31\x30\x31\x2e\60\x2e\x34\70\65\x34\56\61\x34\60\40\123\141\146\141\162\x69\x2f\65\x33\67\x2e\63\66";
        goto yrkLL;
        Nr0O1:
        $shtbn = curl_exec($xFq3C);
        goto DqN9D;
        nOXy3:
        goto ECFdw;
        goto RDtxx;
        mOBpW:
        QB85M:
        goto FoMbJ;
        lEP5S:
        goto ECFdw;
        goto asb0i;
        O6ZqQ:
        echo "\12\x20\33\x5b\63\x34\155\111\116\x46\x4f\33\133\x30\155\x3a\40\104\x65\x73\x63\x72\151\160\x74\151\x6f\x6e\x20\160\141\153\145\164\x2e\12";
        goto dzLMx;
        S_1V7:
        curl_setopt($OiEUt, CURLOPT_HTTPHEADER, $v0Dl0);
        goto RVxRN;
        D12Y_:
        echo "\12\40\x1b\x5b\x33\64\x6d\111\x4e\x46\117\x1b\x5b\60\x6d\x3a\x20\120\x72\157\x64\165\x63\x74\111\x64\x20\40\x20\x20\40\x3a\40";
        goto EAqPp;
        nJmpl:
        function eVIW9($JkeZl)
        {
            json_decode($JkeZl);
            return json_last_error() == JSON_ERROR_NONE;
        }
        goto QVp7N;
        IU6W1:
        $Pkwi8 = array();
        goto g7G_l;
        dzLMx:
        echo "\x20\x1b\133\x33\64\x6d\111\116\x46\117\33\133\x30\x6d\72\40{$Rrgnc}\x20\x2d\x20\x52\x70\56{$WzaE0}\12";
        goto FMYES;
        PPHw0:
        curl_setopt($OiEUt, CURLOPT_SSL_VERIFYHOST, 0);
        goto bn2kv;
        ntNMn:
        $NiBdU = "\x7b\x22\x61\x64\144\x6f\x6e\115\x65\156\x75\103\x61\164\145\147\x6f\x72\171\42\x3a\x22\42\x2c\x22\141\x64\x64\x6f\156\115\x65\156\165\x53\x75\x62\x43\x61\164\x65\147\157\x72\171\x22\x3a\42\42\54\42\x62\x61\154\141\156\x63\145\42\x3a\42\x22\54\x22\x63\141\x6c\x6c\x50\154\141\156\x22\x3a\42" . $qqdKO . "\42\x2c\42\x64\x65\x76\x69\143\145\x4d\x61\x6e\x75\146\x61\x63\164\165\x72\x22\x3a\x22\101\163\165\x73\42\54\x22\144\x65\166\x69\x63\145\115\157\x64\x65\x6c\42\x3a\x22\x41\123\x55\x53\x5f\x5a\60\x31\121\104\x22\54\42\x64\x65\166\151\143\145\x4f\x73\x22\72\x22\x41\x6e\144\162\x6f\x69\144\x22\54\x22\151\155\145\151\42\72\42\101\x6e\144\162\x6f\151\x64\x20\x63\x30\x38\x32\x66\x37\x36\x31\x63\64\141\x30\x38\x35\x31\66\x22\x2c\x22\154\x61\x6e\147\x75\x61\147\145\42\72\x30\54\42\x6d\145\156\x75\x43\x61\x74\x65\147\x6f\162\x79\x22\72\x22\63\x22\54\x22\155\x65\156\165\x43\141\x74\145\147\x6f\162\171\x4e\141\x6d\145\42\72\x22\x54\162\x69\120\162\x6f\x64\x75\143\x74\x22\x2c\x22\155\145\156\165\x49\144\123\x6f\165\x72\143\145\42\x3a\x22\x22\54\x22\155\145\x6e\165\123\165\x62\103\x61\x74\145\x67\157\x72\171\x22\x3a\42\42\54\x22\x6d\145\x6e\165\x53\165\x62\x43\x61\164\145\147\157\x72\171\116\141\155\x65\x22\72\x22\x22\54\42\x6d\x73\151\x73\x64\x6e\x22\72\x22" . $xw0iR . "\x22\x2c\42\x70\141\171\x6d\145\156\164\x4d\145\164\x68\x6f\144\42\x3a\x22\60\60\x22\x2c\42\x70\162\157\x64\165\x63\164\101\x64\x64\117\156\111\x64\x22\72\42\x22\x2c\x22\x70\x72\157\144\165\143\x74\111\144\x22\72\42" . $NYaeC . "\42\x2c\42\x73\145\143\x72\145\x74\x4b\x65\171\x22\x3a\x22" . $R2dkV . "\42\54\x22\x73\145\162\166\x69\x63\x65\120\x6c\141\156\x22\x3a\42\104\x65\x66\x61\165\154\164\42\x2c\x22\x73\155\x73\x22\72\164\162\165\x65\x2c\42\x73\x75\142\163\143\162\151\142\x65\x72\x54\171\x70\x65\42\72\x22\x50\x72\x65\x70\141\x69\x64\x22\54\42\164\x6f\x74\141\154\x50\162\x6f\144\165\143\x74\x50\162\x69\x63\145\x22\72\42\42\x2c\42\x75\164\x6d\42\72\42\x22\54\42\165\x74\155\x43\141\155\160\141\x69\x67\156\x22\x3a\x22\x22\54\42\165\164\155\103\x6f\x6e\164\145\x6e\164\42\x3a\42\x22\54\42\165\x74\155\115\x65\144\151\x75\155\42\72\42\x22\54\42\x75\x74\x6d\123\x6f\x75\x72\x63\145\42\72\x22\42\x2c\42\x75\164\155\x54\x65\162\x6d\x22\x3a\x22\x22\x2c\x22\x76\145\x6e\x64\157\x72\x49\144\x22\x3a\42\61\x31\42\x7d";
        goto uIsnb;
        T9ZHN:
        if ($IBftm == "\64") {
            goto XheSV;
        }
        goto Kinz5;
        UIoo1:
        goto ECFdw;
        goto Nwasi;
        olPdv:
        if ($zQBer) {
            goto QB85M;
        }
        goto mOBpW;
        RFTwQ:
        if ($IBftm == "\62\65") {
            goto SY17d;
        }
        goto sNqTw;
        K9hK_:
    }
}
error_reporting(E_ERROR);

use mMmqm\Lrvm9;
use mMMQm\y4_GM;
use mmMQm\J7V3p;

if ($argv[1] == "\x2d\55\164\150\x72\x65\145") {
    goto xu0jx;
}
if ($argv[1] == "\x2d\x2d\150\x65\154\x70") {
    goto dDbgv;
}
if (isset($argv[0])) {
    goto IPmoY;
}
goto RMek6;
xu0jx:
lrvm9::f8V73();
goto RMek6;
dDbgv:
echo "\x20\33\133\63\64\x6d\111\116\x46\117\x1b\x5b\60\155\x3a\x20\55\55\164\150\x72\145\145\40\11\x46\157\162\x20\x72\165\x6e\156\151\x6e\x67\40\164\157\157\x6c\163\40\x74\145\155\142\141\153\40\160\x61\x63\x6b\x61\147\x65\40\x54\150\162\x65\145\56";
goto RMek6;
IPmoY:
$tV_rq = "\x1b\133\x33\63\x6d";
$oSnfI = "\x1b\133\60\x6d";
$FtQJV = "\33\x5b\x39\62\x6d";
echo "\x20\33\133\x33\x34\x6d\x49\116\106\x4f\x1b\x5b\60\x6d\72\40\x57\145\154\x63\x6f\x6d\145\40\164\x6f\40\124\x68\x72\x65\x65\x20\x50\x72\x6f\166\x69\144\x65\162\xa";
echo "\40\33\133\x33\64\x6d\111\x4e\x46\117\x1b\x5b\60\x6d\x3a\40\105\170\x61\155\x70\154\x65\72\40\160\150\x70\40\155\x61\x69\156\x2e\160\x68\160\x20\55\55\150\x65\154\x70\12";
echo "\40\33\133\63\x34\155\111\x4e\106\117\x1b\133\60\x6d\x3a\40\x47\x65\164\x20\x6c\151\x63\x65\x6e\x73\151\x20\146\x6f\x72\x20\141\143\164\x69\x76\x61\x73\151\x20\x63\x6f\x6e\x74\141\143\164\x20\x61\144\155\x69\156\40\50\40{$tV_rq}\60\70\71\65\x33\x37\x35\61\x33\x36\x33\61\61{$oSnfI}\40\51\12";
RMek6:
