<?php
/**
 * Class which returns the class map definition
 * @package
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get()
    {
        return array(
            'MedicalViewReportPdf' => '\\StructType\\MedicalViewReportPdf',
            'MedicalViewReportPdfResponse' => '\\StructType\\MedicalViewReportPdfResponse',
            'AdoptionDetails' => '\\StructType\\AdoptionDetails',
            'AdoptionDetailsResponse' => '\\StructType\\AdoptionDetailsResponse',
            'AdoptionDetailsResult' => '\\StructType\\AdoptionDetailsResult',
            'AdoptionList' => '\\StructType\\AdoptionList',
            'AdoptionListResponse' => '\\StructType\\AdoptionListResponse',
            'ArrayOfXmlNode' => '\\ArrayType\\ArrayOfXmlNode',
            'XmlNode' => '\\StructType\\XmlNode',
            'AdoptableSearch' => '\\StructType\\AdoptableSearch',
            'AdoptableSearchResponse' => '\\StructType\\AdoptableSearchResponse',
            'AdoptableSearchWithStage' => '\\StructType\\AdoptableSearchWithStage',
            'AdoptableSearchWithStageResponse' => '\\StructType\\AdoptableSearchWithStageResponse',
            'AdoptableDetails' => '\\StructType\\AdoptableDetails',
            'AdoptableDetailsResponse' => '\\StructType\\AdoptableDetailsResponse',
            'AdoptableDetailsResult' => '\\StructType\\AdoptableDetailsResult',
            'foundSearch' => '\\StructType\\FoundSearch',
            'foundSearchResponse' => '\\StructType\\FoundSearchResponse',
            'foundSearchForCompanyGroup' => '\\StructType\\FoundSearchForCompanyGroup',
            'foundSearchForCompanyGroupResponse' => '\\StructType\\FoundSearchForCompanyGroupResponse',
            'foundSearchForCompanyGroupPageable' => '\\StructType\\FoundSearchForCompanyGroupPageable',
            'foundSearchForCompanyGroupPageableResponse' => '\\StructType\\FoundSearchForCompanyGroupPageableResponse',
            'foundSearchWithSite' => '\\StructType\\FoundSearchWithSite',
            'foundSearchWithSiteResponse' => '\\StructType\\FoundSearchWithSiteResponse',
            'lostSearch' => '\\StructType\\LostSearch',
            'lostSearchResponse' => '\\StructType\\LostSearchResponse',
            'lostSearchForCompanyGroup' => '\\StructType\\LostSearchForCompanyGroup',
            'lostSearchForCompanyGroupResponse' => '\\StructType\\LostSearchForCompanyGroupResponse',
            'lostSearchForCompanyGroupPageable' => '\\StructType\\LostSearchForCompanyGroupPageable',
            'lostSearchForCompanyGroupPageableResponse' => '\\StructType\\LostSearchForCompanyGroupPageableResponse',
            'foundDetails' => '\\StructType\\FoundDetails',
            'foundDetailsResponse' => '\\StructType\\FoundDetailsResponse',
            'foundDetailsResult' => '\\StructType\\FoundDetailsResult',
            'foundDetailsForCompanyGroup' => '\\StructType\\FoundDetailsForCompanyGroup',
            'foundDetailsForCompanyGroupResponse' => '\\StructType\\FoundDetailsForCompanyGroupResponse',
            'foundDetailsForCompanyGroupResult' => '\\StructType\\FoundDetailsForCompanyGroupResult',
            'lostDetails' => '\\StructType\\LostDetails',
            'lostDetailsResponse' => '\\StructType\\LostDetailsResponse',
            'lostDetailsResult' => '\\StructType\\LostDetailsResult',
            'lostDetailsForCompanyGroup' => '\\StructType\\LostDetailsForCompanyGroup',
            'lostDetailsForCompanyGroupResponse' => '\\StructType\\LostDetailsForCompanyGroupResponse',
            'lostDetailsForCompanyGroupResult' => '\\StructType\\LostDetailsForCompanyGroupResult',
            'HappyTailList' => '\\StructType\\HappyTailList',
            'HappyTailListResponse' => '\\StructType\\HappyTailListResponse',
            'ArrayOfAnyType' => '\\ArrayType\\ArrayOfAnyType',
            'HappyTailDetails' => '\\StructType\\HappyTailDetails',
            'HappyTailListItem' => '\\StructType\\HappyTailListItem',
            'HappyTailDetailItem' => '\\StructType\\HappyTailDetailItem',
            'ArrayOfHappyTailDetailItem' => '\\ArrayType\\ArrayOfHappyTailDetailItem',
            'HappyTailDetailsResponse' => '\\StructType\\HappyTailDetailsResponse',
        );
    }
}
