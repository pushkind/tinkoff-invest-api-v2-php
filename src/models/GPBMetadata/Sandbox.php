<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: sandbox.proto

namespace GPBMetadata;

class Sandbox
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common::initOnce();
        \GPBMetadata\Orders::initOnce();
        \GPBMetadata\Operations::initOnce();
        \GPBMetadata\Users::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
sandbox.proto%tinkoff.public.invest.api.contract.v1orders.protooperations.protousers.protogoogle/api/field_behavior.proto"7
OpenSandboxAccountRequest
name (	H �B
_name"0
OpenSandboxAccountResponse

account_id (	"5
CloseSandboxAccountRequest

account_id (	B�A"
CloseSandboxAccountResponse"v
SandboxPayInRequest

account_id (	B�AF
amount (21.tinkoff.public.invest.api.contract.v1.MoneyValueB�A"Z
SandboxPayInResponseB
balance (21.tinkoff.public.invest.api.contract.v1.MoneyValue2�
SandboxService�
OpenSandboxAccount@.tinkoff.public.invest.api.contract.v1.OpenSandboxAccountRequestA.tinkoff.public.invest.api.contract.v1.OpenSandboxAccountResponse�
GetSandboxAccounts9.tinkoff.public.invest.api.contract.v1.GetAccountsRequest:.tinkoff.public.invest.api.contract.v1.GetAccountsResponse�
CloseSandboxAccountA.tinkoff.public.invest.api.contract.v1.CloseSandboxAccountRequestB.tinkoff.public.invest.api.contract.v1.CloseSandboxAccountResponse�
PostSandboxOrder7.tinkoff.public.invest.api.contract.v1.PostOrderRequest8.tinkoff.public.invest.api.contract.v1.PostOrderResponse�
ReplaceSandboxOrder:.tinkoff.public.invest.api.contract.v1.ReplaceOrderRequest8.tinkoff.public.invest.api.contract.v1.PostOrderResponse�
GetSandboxOrders7.tinkoff.public.invest.api.contract.v1.GetOrdersRequest8.tinkoff.public.invest.api.contract.v1.GetOrdersResponse�
CancelSandboxOrder9.tinkoff.public.invest.api.contract.v1.CancelOrderRequest:.tinkoff.public.invest.api.contract.v1.CancelOrderResponse�
GetSandboxOrderState;.tinkoff.public.invest.api.contract.v1.GetOrderStateRequest1.tinkoff.public.invest.api.contract.v1.OrderState�
GetSandboxPositions7.tinkoff.public.invest.api.contract.v1.PositionsRequest8.tinkoff.public.invest.api.contract.v1.PositionsResponse�
GetSandboxOperations8.tinkoff.public.invest.api.contract.v1.OperationsRequest9.tinkoff.public.invest.api.contract.v1.OperationsResponse�
GetSandboxOperationsByCursorC.tinkoff.public.invest.api.contract.v1.GetOperationsByCursorRequestD.tinkoff.public.invest.api.contract.v1.GetOperationsByCursorResponse�
GetSandboxPortfolio7.tinkoff.public.invest.api.contract.v1.PortfolioRequest8.tinkoff.public.invest.api.contract.v1.PortfolioResponse�
SandboxPayIn:.tinkoff.public.invest.api.contract.v1.SandboxPayInRequest;.tinkoff.public.invest.api.contract.v1.SandboxPayInResponse�
GetSandboxWithdrawLimits<.tinkoff.public.invest.api.contract.v1.WithdrawLimitsRequest=.tinkoff.public.invest.api.contract.v1.WithdrawLimitsResponse�
GetSandboxMaxLots8.tinkoff.public.invest.api.contract.v1.GetMaxLotsRequest9.tinkoff.public.invest.api.contract.v1.GetMaxLotsResponseBa
ru.tinkoff.piapi.contract.v1PZ./;investapi�TIAPI�Tinkoff.InvestApi.V1�Tinkoff\\Invest\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

