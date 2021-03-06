<?php

namespace SwedbankPaymentPortal\SharedEntity\Type;


class HostedPageSetId extends AbstractEnumerableType
{
    //------------   PRODUCTION ENVIRONMENT IDS   ---------
    public static final function EnglishPage()
    {
        return self::get(2207);
    }

    public static final function EstonianPage()
    {
        return self::get(2209);
    }

    public static final function LatvianPage()
    {
        return self::get(2211);
    }

    public static final function LithuanianPage()
    {
        return self::get(2213);
    }

    public static final function RussianPage()
    {
        return self::get(2215);
    }

    //-----------   TEST ENVIRONMENT IDS   ----------------

    public static final function EnglishPage_TestEnv()
    {
        return self::get(164);
    }

    public static final function EstonianPage_TestEnv()
    {
        return self::get(166);
    }

    public static final function LatvianPage_TestEnv()
    {
        return self::get(168);
    }

    public static final function LithuanianPage_TestEnv()
    {
        return self::get(170);
    }

    public static final function RussianPage_TestEnv()
    {
        return self::get(172);
    }

}

